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

/**
 *
 * In the above example, the plaintext message is first encrypted using the openssl_encrypt function, 
 * which takes the plaintext message, the encryption algorithm, the encryption key, and an initialization vector (IV) as arguments. 
 * The IV is a random value that is used to add an extra layer of security to the encryption process.
 *
 * After encryption the ciphertext is base64 encoded to make it URL safe and then decrypted using the openssl_decrypt function, 
 * which takes the ciphertext, the encryption algorithm, the encryption key and the IV as arguments.
 *
 * It's important to note that the key used in encryption and decryption should be kept secret, 
 * and should never be hardcoded in the script like above.
 * 
 * It's also important to note that this example uses the AES-256-CBC algorithm, 
 * which is considered a secure algorithm, but other options are available, 
 * and the choice of algorithm depends on the security requirements of your application.
 *
 */

?>
