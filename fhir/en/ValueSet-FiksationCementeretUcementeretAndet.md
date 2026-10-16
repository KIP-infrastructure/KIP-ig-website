# Fiksation - cementeret/ucementeret/andet - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fiksation - cementeret/ucementeret/andet**

## ValueSet: Fiksation - cementeret/ucementeret/andet 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FiksationCementeretUcementeretAndet | *Version*:2.27.0 |
| Active as of 2022-10-13 | *Computable Name*:FiksationCementeretUcementeretAndet |

 
Fiksation - cementeret/ucementeret/andet 

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
  "id" : "FiksationCementeretUcementeretAndet",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FiksationCementeretUcementeretAndet",
  "version" : "2.27.0",
  "name" : "FiksationCementeretUcementeretAndet",
  "title" : "Fiksation - cementeret/ucementeret/andet",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Fiksation - cementeret/ucementeret/andet",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "cemented",
        "display" : "Cementeret"
      },
      {
        "code" : "uncemented",
        "display" : "Ucementeret"
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
