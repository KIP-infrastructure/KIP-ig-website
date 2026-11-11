# Fiksation - cementeret/ucementeret - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fiksation - cementeret/ucementeret**

## ValueSet: Fiksation - cementeret/ucementeret 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FiksationCementeretUcementeret | *Version*:2.27.3 |
| Active as of 2022-10-06 | *Computable Name*:FiksationCementeretUcementeret |

 
Fiksation - cementeret/ucementeret 

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
  "id" : "FiksationCementeretUcementeret",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FiksationCementeretUcementeret",
  "version" : "2.27.3",
  "name" : "FiksationCementeretUcementeret",
  "title" : "Fiksation - cementeret/ucementeret",
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
  "description" : "Fiksation - cementeret/ucementeret",
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
    }]
  }
}

```
