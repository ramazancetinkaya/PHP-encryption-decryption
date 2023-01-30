Simple Encryption/Decryption

PHP provides several built-in functions for encryption and decryption, such as openssl_encrypt and openssl_decrypt. Here is an example of how to use these functions to encrypt and decrypt a string.

In the above example, the plaintext message is first encrypted using the openssl_encrypt function, which takes the plaintext message, the encryption algorithm, the encryption key, and an initialization vector (IV) as arguments. 
The IV is a random value that is used to add an extra layer of security to the encryption process.

After encryption the ciphertext is base64 encoded to make it URL safe and then decrypted using the openssl_decrypt function, which takes the ciphertext, the encryption algorithm, the encryption key and the IV as arguments.

It's important to note that the key used in encryption and decryption should be kept secret, and should never be hardcoded in the script like above.

It's also important to note that this example uses the AES-256-CBC algorithm, which is considered a secure algorithm, but other options are available, and the choice of algorithm depends on the security requirements of your application.
