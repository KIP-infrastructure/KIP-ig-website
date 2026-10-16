# Alkohol 0-10 - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alkohol 0-10**

## ValueSet: Alkohol 0-10 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Alkohol0til10 | *Version*:2.27.0 |
| Active as of 2022-06-21 | *Computable Name*:Alkohol0til10 |

 
Udfald for alkohol 

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
  "id" : "Alkohol0til10",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Alkohol0til10",
  "version" : "2.27.0",
  "name" : "Alkohol0til10",
  "title" : "Alkohol 0-10",
  "status" : "active",
  "date" : "2022-06-21T00:00:00+02:00",
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
  "description" : "Udfald for alkohol",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Alchohol",
      "concept" : [{
        "code" : "0-10",
        "display" : "0-10 genstande pr. uge"
      },
      {
        "code" : "gte11",
        "display" : "Over 10 genstande pr. uge"
      }]
    }]
  }
}

```
