# hash_password.py
import sys
import hashlib
import bcrypt

# Récupérer le mot de passe passé en argument
password = sys.argv[1]

# Créer un salt
salt = bcrypt.gensalt()

# Hasher le mot de passe
hashed_password = bcrypt.hashpw(password.encode('utf-8'), salt)

# Afficher le mot de passe hashé
print(hashed_password.decode('utf-8'))


