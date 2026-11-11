# Procedurer, andre (DKRR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedurer, andre (DKRR)**

## ValueSet: Procedurer, andre (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedurerAndreDKRR | *Version*:2.27.2 |
| Active as of 2022-09-19 | *Computable Name*:ProcedurerAndreDKRR |

 
Procedurer, andre (DKRR) 

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
  "id" : "ProcedurerAndreDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedurerAndreDKRR",
  "version" : "2.27.2",
  "name" : "ProcedurerAndreDKRR",
  "title" : "Procedurer, andre (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Procedurer, andre (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "synovectomy",
        "display" : "Synovektomi"
      },
      {
        "code" : "implant_removal",
        "display" : "Implantatfjernelse"
      },
      {
        "code" : "osteotomy",
        "display" : "Osteotomi"
      },
      {
        "code" : "osteosynthesis",
        "display" : "Osteosyntese"
      },
      {
        "code" : "operation_infection",
        "display" : "Operation pga. infektion"
      },
      {
        "code" : "bone_transplantation",
        "display" : "Knogletransplantation"
      },
      {
        "code" : "operational_mobilization",
        "display" : "Operativ mobilisering"
      },
      {
        "code" : "tenodesis",
        "display" : "Tenodesis"
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
