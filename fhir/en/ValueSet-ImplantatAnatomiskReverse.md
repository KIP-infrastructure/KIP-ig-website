# Implantat - anatomisk/reverse - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implantat - anatomisk/reverse**

## ValueSet: Implantat - anatomisk/reverse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ImplantatAnatomiskReverse | *Version*:2.27.3 |
| Active as of 2022-10-06 | *Computable Name*:ImplantatAnatomiskReverse |

 
Implantat - anatomisk/reverse 

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
  "id" : "ImplantatAnatomiskReverse",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ImplantatAnatomiskReverse",
  "version" : "2.27.3",
  "name" : "ImplantatAnatomiskReverse",
  "title" : "Implantat - anatomisk/reverse",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Implantat - anatomisk/reverse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "anatomic",
        "display" : "Anatomisk"
      },
      {
        "code" : "reverse",
        "display" : "Reverse"
      }]
    }]
  }
}

```
