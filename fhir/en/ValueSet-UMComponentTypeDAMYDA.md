# U-M komponent type - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **U-M komponent type**

## ValueSet: U-M komponent type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UMComponentTypeDAMYDA | *Version*:2.27.1 |
| Active as of 2022-07-14 | *Computable Name*:UMComponentTypeDAMYDA |

 
U-M komponent type [DAMYDA] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "UMComponentTypeDAMYDA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UMComponentTypeDAMYDA",
  "version" : "2.27.1",
  "name" : "UMComponentTypeDAMYDA",
  "title" : "U-M komponent type",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "U-M komponent type [DAMYDA]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MComponentType",
      "concept" : [{
        "code" : "kappa",
        "display" : "Kappa"
      },
      {
        "code" : "lambda",
        "display" : "Lambda"
      }]
    }]
  }
}

```
