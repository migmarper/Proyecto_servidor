<?php
/** @var string $titulo */
/** @var string $descripcion */
$title     = 'Crear Usuario | AuraVerse Nexus';
$shellType = 'web_dashboard';
include "app/Views/backend/new_template/backend.head.php";
include "app/Views/backend/new_template/backend.aside.php";
?>

    <main class="relative pt-16 bg-surface min-h-screen px-gutter-lg py-space-lg">
        <div class="max-w-3xl mx-auto bg-surface-container-low p-space-lg rounded-xl shadow-lg border-l-4 border-l-primary">

            <div class="mb-6 border-b border-surface-container-highest pb-4">
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-wide"><?= $titulo ?></h1>
                <p class="font-body-sm text-body-sm text-outline mt-1"><?= $descripcion ?></p>
            </div>

            <div class="overflow-x-auto w-full">
                <form action="/user" method="post" class="flex flex-col gap-4">

                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1" for="input-name">Nombre</label>
                        <input class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary" id="input-name" name="name" type="text" placeholder="Introduce el nombre de usuario">
                    </div>

                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1" for="input-email">Email</label>
                        <input class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary" id="input-email" name="email" type="email" placeholder="Introduce el correo del usuario">
                    </div>

                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1" for="input-password">Contraseña</label>
                        <input class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary" id="input-password" name="password" type="password" placeholder="Introduce la contraseña">
                    </div>

                    <div>
                        <label class="font-label-sm text-label-sm text-outline uppercase block mb-1" for="input-birthdate">Fecha de Nacimiento</label>
                        <input class="w-full bg-surface-container-lowest text-on-surface px-3 py-2 rounded focus:outline-none focus:ring-1 focus:ring-tertiary" id="input-birthdate" name="birthdate" type="date">
                    </div>

                    <div class="flex items-center justify-end pt-4 border-t border-outline-variant/40">
                        <a href="/user" class="px-4 py-2 rounded bg-surface-container-high text-on-surface font-label-md uppercase mr-2 hover:bg-surface-container-highest transition-colors">Cancelar</a>
                        <button class="px-4 py-2 rounded bg-primary-container text-on-primary-container font-label-md uppercase hover:brightness-110 transition-all" type="submit">
                            Guardar Usuario
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </main>

<?php include "app/Views/backend/new_template/backend.footer.php"; ?>