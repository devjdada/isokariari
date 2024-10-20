<div>
    {{-- Activates the menu item when a route matches the `link` property --}}
    @if ($user = auth()->user())
        <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="pt-2">
            <x-slot:actions>

                <x-button wire:click="logout" icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" />
            </x-slot:actions>
        </x-list-item>
        <x-menu-separator />
    @endif
    <x-menu activate-by-route>
        <x-menu-item title="Dashboard" icon="o-home" link="{{ route('dashboard') }}" />

        <x-menu-sub title="Projects" icon="o-cog-6-tooth">
            <x-menu-item title="New Project" icon="o-wifi" link="{{ route('new-project') }}" />
            <x-menu-item title="All Projects" icon="o-archive-box" link="{{ route('manage-projects') }}" />
        </x-menu-sub>
        <x-menu-sub title="Services" icon="o-cog-6-tooth">
            <x-menu-item title="New Service" icon="o-wifi" link="{{ route('new-service') }}" />
            <x-menu-item title="All Services" icon="o-archive-box" link="{{ route('manage-services') }}" />
        </x-menu-sub>
        <x-menu-sub title="Blogs" icon="o-cog-6-tooth">
            <x-menu-item title="New Blog" icon="o-wifi" link="{{ route('new-blog') }}" />
            <x-menu-item title="All Blogs" icon="o-archive-box" link="{{ route('manage-blogs') }}" />
        </x-menu-sub>
        <x-menu-sub title="Settings" icon="o-cog-6-tooth">
            <x-menu-item title="About" icon="o-wifi" link="{{ route('manage-about') }}" />
            <x-menu-item title="Hero Slider" icon="o-archive-box" link="{{ route('manage-hero') }}" />
        </x-menu-sub>
        <x-menu-item title="Manage Testimony" icon="o-home" link="{{ route('manage-testimony') }}" />
        <x-menu-item title="Manage Client" icon="o-home" link="{{ route('manage-client') }}" />
    </x-menu>
</div>
