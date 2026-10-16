# Antibiotikaprofylakse (DHR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Antibiotikaprofylakse (DHR)**

## ValueSet: Antibiotikaprofylakse (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AntibiotikaprofylakseDHR | *Version*:2.27.0 |
| Active as of 2022-11-18 | *Computable Name*:AntibiotikaprofylakseDHR |

 
Antibiotikaprofylakse (DHR) 

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
  "id" : "AntibiotikaprofylakseDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AntibiotikaprofylakseDHR",
  "version" : "2.27.0",
  "name" : "AntibiotikaprofylakseDHR",
  "title" : "Antibiotikaprofylakse (DHR)",
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
  "description" : "Antibiotikaprofylakse (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicationName",
      "concept" : [{
        "code" : "axacef",
        "display" : "Axacef"
      },
      {
        "code" : "cloxacillin",
        "display" : "Cloxacillin"
      },
      {
        "code" : "clindamycin",
        "display" : "Clindamycin"
      },
      {
        "code" : "dicillin",
        "display" : "Dicillin"
      },
      {
        "code" : "diclosil",
        "display" : "Diclosil J01CF01"
      },
      {
        "code" : "zinacef",
        "display" : "Zinacef"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "J01GB03",
        "display" : "Gentamicin J01GB03 - ATC"
      },
      {
        "code" : "J01XA01",
        "display" : "Vancomycin J01XA01 - ATC"
      },
      {
        "code" : "J01DC02",
        "display" : "Cefuroxime J01DC02 - ATC"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden antibiotikaprofylakse"
      }]
    }]
  }
}

```
