# LARAVEL-ENCRYPT

- Use trait for your models when you want to hash attribute, in the database type of field for the attribute should be `TEXT`: 

- Example for Model:
```
use ModelUseEncryptedAttributes;


/**
 * @return Attribute
 */
public function host(): Attribute
{
    return $this->encryptedAttribute();
}
```
- Attribute will automatically been hashed for save/update and uhashed when you will initialize the model

