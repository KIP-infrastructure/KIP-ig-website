# Trombolyseprofylakse (DHR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trombolyseprofylakse (DHR)**

## ValueSet: Trombolyseprofylakse (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TrombolyseprofylakseDHR | *Version*:2.27.1 |
| Active as of 2022-11-18 | *Computable Name*:TrombolyseprofylakseDHR |

 
Trombolyseprofylakse (DHR) 

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
  "id" : "TrombolyseprofylakseDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TrombolyseprofylakseDHR",
  "version" : "2.27.1",
  "name" : "TrombolyseprofylakseDHR",
  "title" : "Trombolyseprofylakse (DHR)",
  "status" : "active",
  "date" : "2022-11-18T00:00:00+02:00",
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
  "description" : "Trombolyseprofylakse (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicationName",
      "concept" : [{
        "code" : "apixaban",
        "display" : "Apixaban"
      },
      {
        "code" : "arixtra",
        "display" : "Arixtra"
      },
      {
        "code" : "fragmin",
        "display" : "Fragmin"
      },
      {
        "code" : "innohep",
        "display" : "Innohep"
      },
      {
        "code" : "klexane",
        "display" : "Klexane"
      },
      {
        "code" : "logiparin",
        "display" : "Logiparin"
      },
      {
        "code" : "marevan",
        "display" : "Marevan"
      },
      {
        "code" : "noparin",
        "display" : "Noparin"
      },
      {
        "code" : "pradaxa",
        "display" : "Pradaxa"
      },
      {
        "code" : "tinzaparin",
        "display" : "Tinzaparin"
      },
      {
        "code" : "xarelto",
        "display" : "Xarelto"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
