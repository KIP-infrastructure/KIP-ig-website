# Subscapularis (DSR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Subscapularis (DSR)**

## ValueSet: Subscapularis (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SubscapularisDSR | *Version*:2.27.2 |
| Active as of 2022-10-06 | *Computable Name*:SubscapularisDSR |

 
Subscapularis (DSR) 

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
  "id" : "SubscapularisDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SubscapularisDSR",
  "version" : "2.27.2",
  "name" : "SubscapularisDSR",
  "title" : "Subscapularis (DSR)",
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
  "description" : "Subscapularis (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "tenotomy",
        "display" : "Tenotomi"
      },
      {
        "code" : "osteotomy",
        "display" : "Osteotomi"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "intact",
        "display" : "Bevares intakt (fx ved fraktur)"
      },
      {
        "code" : "not_reconstructable",
        "display" : "Ikke rekonstruerbar/ruptur"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
