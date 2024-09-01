<?php

class User
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

class UserRepository
{
    public function save(User $user)
    {
        // Simpan user ke database
        echo "Menyimpan user: " . $user->getName() . " ke database.\n";
    }
}

class EmailService
{
    public function sendConfirmationEmail(User $user)
    {
        // Kirim email konfirmasi
        echo "Mengirim email konfirmasi ke: " . $user->getEmail() . ".\n";
    }
}

// Penggunaan
$user = new User("Jojon", "jojon@example.com");
$userRepository = new UserRepository();
$emailService = new EmailService();

$userRepository->save($user);
$emailService->sendConfirmationEmail($user);
