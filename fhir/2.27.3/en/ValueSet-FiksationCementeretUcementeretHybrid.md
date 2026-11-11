# Fiksation - cementeret/ucementeret/hybrid - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fiksation - cementeret/ucementeret/hybrid**

## ValueSet: Fiksation - cementeret/ucementeret/hybrid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FiksationCementeretUcementeretHybrid | *Version*:2.27.3 |
| Active as of 2022-10-06 | *Computable Name*:FiksationCementeretUcementeretHybrid |

 
Fiksation - cementeret/ucementeret/hybrid 

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
  "id" : "FiksationCementeretUcementeretHybrid",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FiksationCementeretUcementeretHybrid",
  "version" : "2.27.3",
  "name" : "FiksationCementeretUcementeretHybrid",
  "title" : "Fiksation - cementeret/ucementeret/hybrid",
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
  "description" : "Fiksation - cementeret/ucementeret/hybrid",
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
      },
      {
        "code" : "hybrid",
        "display" : "Hybrid"
      }]
    }]
  }
}

```
