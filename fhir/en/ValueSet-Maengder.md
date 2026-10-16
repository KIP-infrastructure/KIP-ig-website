# Mængder - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mængder**

## ValueSet: Mængder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Maengder | *Version*:2.27.0 |
| Active as of 2023-02-13 | *Computable Name*:Maengder |

 
Angivelse af mængder 

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
  "id" : "Maengder",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Maengder",
  "version" : "2.27.0",
  "name" : "Maengder",
  "title" : "Mængder",
  "status" : "active",
  "date" : "2023-02-13T00:00:00+02:00",
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
  "description" : "Angivelse af mængder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Maengde",
      "concept" : [{
        "code" : "ingen",
        "display" : "Ingen"
      },
      {
        "code" : "lille",
        "display" : "En lille mængde"
      },
      {
        "code" : "moderat",
        "display" : "En moderat mængde"
      },
      {
        "code" : "stor",
        "display" : "En stor mængde"
      }]
    }]
  }
}

```
