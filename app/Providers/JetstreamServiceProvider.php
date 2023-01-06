<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the roles and permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', 'Administrator', [
            'create',
            'read',
            'update',
            'delete',
        ])->description('Administrator users can perform any action.');

        Jetstream::role('management', 'Management Unit', [
            'read',
            'create',
            'delete',

        ])->description('Management unit can create, read and delete');

        Jetstream::role('general', 'General User', [
            'read',
            'create',

        ])->description('General user have the ability to read and create.');
        Jetstream::role('purchaser', 'Purchaser', [
            'read',
            'create',

        ])->description('Purchaser will received email upon update of the breakdowns.');
        Jetstream::role('sales team', 'Sales team', [
            'read',
            'create',

        ])->description('Sales team will received email upon update of the breakdowns.');
        Jetstream::role('sales team', 'Sales team', [
            'read',
            'create',

        ])->description('Sales team will received email upon update of the breakdowns.');
        Jetstream::role('confidentiality policy', 'Confidentiality Policy', [
            'read',
            'create',

        ])->description('Confidentiality policy will received email upon update of the breakdowns.');

        Jetstream::role('Corporate Equipment - Admin', 'Corporate Equipment - Admin', [
            'read',
            'create',

        ])->description('Corporate Equipment - Admin will received email upon update of the breakdowns.');
        Jetstream::role('Corporate Equipment - Testing', 'Corporate Equipment - Testing', [
            'read',
            'create',

        ])->description('Corporate Equipment - Testing will received email upon update of the breakdowns.');



    }
}
