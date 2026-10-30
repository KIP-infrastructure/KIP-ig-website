# Operationstype - kirurgi (LYFO) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationstype - kirurgi (LYFO)**

## ValueSet: Operationstype - kirurgi (LYFO) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationstypeLYFO | *Version*:2.27.1 |
| Active as of 2022-07-18 | *Computable Name*:OperationstypeLYFO |

 
Operationstype - kirurgi (LYFO) 

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
  "id" : "OperationstypeLYFO",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationstypeLYFO",
  "version" : "2.27.1",
  "name" : "OperationstypeLYFO",
  "title" : "Operationstype - kirurgi (LYFO)",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Operationstype - kirurgi (LYFO)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen kirurgi"
      },
      {
        "code" : "other",
        "display" : "Anden kirurgi"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationType",
      "concept" : [{
        "code" : "extirpation",
        "display" : "Lymfom extirpation (-> tumormængde reduceret betydeligt)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "KJMA",
        "display" : "Splenektomi"
      }]
    }]
  }
}

```
