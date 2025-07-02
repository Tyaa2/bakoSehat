<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = User::with('creator');

        $sort = $request->query('sort', 'created_at');
        $direction = $request->query('direction', 'desc');

        // Pencarian nama/email
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan role
        $filter = $request->input('filter');
        if ($filter && in_array($filter, ['puskesmas', 'kelurahan', 'dukcapil', 'dinkes', 'rsud'])) {
            $query->where('role', $filter);
        }

        // Urut dan paginasi
        $query->orderBy($sort, $direction);
        $users = $query->paginate(10)->withQueryString();

        $roles = ['puskesmas', 'kelurahan', 'dukcapil', 'dinkes', 'rsud'];

        return view('dinkes.users.index', compact('users', 'filter', 'sort', 'direction', 'roles'));
    }

    public function create()
    {
        $roles = ['puskesmas', 'kelurahan', 'dukcapil', 'dinkes', 'rsud'];
        return view('dinkes.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required|in:puskesmas,kelurahan,dukcapil,dinkes,rsud',
            'alamat' => 'nullable|string|max:255',
            'profile' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        $profilePath = null;
        if ($request->hasFile('profile')) {
            $profilePath = $request->file('profile')->store('profiles', 'public');
        }

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'alamat' => $validated['alamat'] ?? null,
            'profile' => $profilePath,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        $this->authorizeUser($user);

        $roles = ['puskesmas', 'kelurahan', 'dukcapil', 'dinkes', 'rsud'];
        return view('dinkes.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorizeUser($user);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'role' => ['required', Rule::in(['puskesmas', 'kelurahan', 'dukcapil', 'dinkes', 'rsud'])],
            'password' => ['nullable', 'string', 'min:6'],
            'alamat' => ['nullable', 'string', 'max:255'],
            'profile' => ['nullable', 'file', 'mimes:jpg,jpeg,png,gif', 'max:10240'],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];
        $user->alamat = $validated['alamat'] ?? null;

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        if ($request->hasFile('profile')) {
            $user->profile = $request->file('profile')->store('profiles', 'public');
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        $this->authorizeUser($user);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }

    private function authorizeUser(User $user)
    {
        if ($user->created_by !== Auth::id()) {
            abort(403, 'Anda tidak memiliki akses ke data ini.');
        }
    }
}
