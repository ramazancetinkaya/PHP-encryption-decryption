<?php

/**
 * PHP encryption-decryption
 *
 * @author [ramazancetinkaya]
 * @date [23.01.2023]
 */

// Encryption
$plaintext = "This is the message to be encrypted.";
$key = "This is the secret encryption key.";

$cipher = "AES-256-CBC";
$ivlen = openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes($ivlen);

$ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv);

// Base64 encode the ciphertext to make it URL-safe
$ciphertext = base64_encode($ciphertext);

// Decryption
$ciphertext = base64_decode($ciphertext);

$plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv);

echo $plaintext;
// Output: "This is the message to be encrypted."

?>
