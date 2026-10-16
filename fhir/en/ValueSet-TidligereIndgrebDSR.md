# Tidligere indgreb (DSR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tidligere indgreb (DSR)**

## ValueSet: Tidligere indgreb (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TidligereIndgrebDSR | *Version*:2.27.0 |
| Active as of 2022-07-04 | *Computable Name*:TidligereIndgrebDSR |

 
Tidligere indgreb (DSR) 

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
  "id" : "TidligereIndgrebDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TidligereIndgrebDSR",
  "version" : "2.27.0",
  "name" : "TidligereIndgrebDSR",
  "title" : "Tidligere indgreb (DSR)",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Tidligere indgreb (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "osteosynthesis",
        "display" : "Osteosyntese"
      },
      {
        "code" : "operation_infection",
        "display" : "Operation pga. infektion"
      },
      {
        "code" : "stabilizing",
        "display" : "Stabiliserende indgreb"
      },
      {
        "code" : "cuff_reconstruction",
        "display" : "Cuff rekonstruktion"
      },
      {
        "code" : "arthroscopic",
        "display" : "Artroskopisk operation uden indsættelse af fremmedlegeme"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet indgreb"
      }]
    }]
  }
}

```
