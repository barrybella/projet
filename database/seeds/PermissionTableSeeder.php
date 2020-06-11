<?php

use App\Permission;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PermissionTableSeeder extends Seeder
{

    private function randDate()
    {
        return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }

    public function run()
    {


        DB::table('permissions')->delete();


        //Utilisateurs
        Permission::create([
            'permission' => 'view_all_users',
            'label' => 'Liste des utilisateurs',
            'type' => 'Utilisateur'
        ]);
        Permission::create([
            'permission' => 'create_users',
            'label' => 'Ajouter des utilisateurs',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'edit_users',
            'label' => 'Modifier des utilisateurs',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'show_users',
            'label' => 'Afficher un utilisateur',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'disable_users',
            'label' => 'Actvier/Désactiver un utilisateur',
            'type' => 'Utilisateur'
        ]);

        //Role
        Permission::create([
            'permission' => 'view_all_role',
            'label' => 'Liste des role',
            'type' => 'Role'
        ]);
        Permission::create([
            'permission' => 'create_role',
            'label' => 'Ajouter un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'show_role',
            'label' => 'Afficher les utilisateurs d\'un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'edit_role',
            'label' => 'Modifier un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'delete_role',
            'label' => 'Supprimer un role',
            'type' => 'Role'
        ]);

        //agent

         Permission::create([
            'permission' => 'view_all_agent',
            'label' => 'Liste des agent de sante',
            'type' => 'Agent'
        ]);
        Permission::create([
            'permission' => 'create_agent',
            'label' => 'Ajouter un agent',
            'type' => 'agent'
        ]);

        Permission::create([
            'permission' => 'show_agent',
            'label' => 'Afficher un agent',
            'type' => 'agent'
        ]);

        Permission::create([
            'permission' => 'edit_agent',
            'label' => 'Modifier un agent',
            'type' => 'agent'
        ]);

        Permission::create([
            'permission' => 'delete_agent',
            'label' => 'Supprimer un agent',
            'type' => 'agent'
        ]);
    //patient


        Permission::create([
            'permission' => 'view_all_patient',
            'label' => 'Liste des patient',
            'type' => 'patient'
        ]);
        Permission::create([
            'permission' => 'create_patient',
            'label' => 'Ajouter un patient',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'show_patient',
            'label' => 'Afficher un patient',
            'type' => 'patient'
        ]);

        Permission::create([
            'permission' => 'edit_patient',
            'label' => 'Modifier un patient',
            'type' => 'patient'
        ]);

        Permission::create([
            'permission' => 'delete_patient',
            'label' => 'Supprimer un patient',
            'type' => 'patient'
        ]);
        //service
        Permission::create([
            'permission' => 'view_all_service',
            'label' => 'Liste des service',
            'type' => 'service'
        ]);
        Permission::create([
            'permission' => 'create_service',
            'label' => 'Ajouter un service',
            'type' => 'service'
        ]);

        Permission::create([
            'permission' => 'show_service',
            'label' => 'Afficher un service',
            'type' => 'service'
        ]);

        Permission::create([
            'permission' => 'edit_service',
            'label' => 'Modifier un service',
            'type' => 'service'
        ]);

        Permission::create([
            'permission' => 'delete_service',
            'label' => 'Supprimer un service',
            'type' => 'service'
        ]);
        //specialite
        Permission::create([
            'permission' => 'view_all_sepcialite',
            'label' => 'Liste des specialite',
            'type' => 'specialite'
        ]);
        Permission::create([
            'permission' => 'create_specialite',
            'label' => 'Ajouter un specialite',
            'type' => 'specialite'
        ]);

        Permission::create([
            'permission' => 'show_sepcialite',
            'label' => 'Afficher les specialite',
            'type' => 'specialite'
        ]);

        Permission::create([
            'permission' => 'edit_sepcialite',
            'label' => 'Modifier un specilalite',
            'type' => 'specialite'
        ]);

        Permission::create([
            'permission' => 'delete_specilalite',
            'label' => 'Supprimer un specialite',
            'type' => 'specialite'
        ]);

        }
}