# Komplikationer pga. organperforation - Diagnosekoder (DUGA) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer pga. organperforation - Diagnosekoder (DUGA)**

## ValueSet: Komplikationer pga. organperforation - Diagnosekoder (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplOrganperfDiagDUGA | *Version*:2.27.0 |
| Active as of 2024-02-21 | *Computable Name*:KomplOrganperfDiagDUGA |

 
Komplikationer pga. organperforation - Diagnosekoder (DUGA) 

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
  "id" : "KomplOrganperfDiagDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplOrganperfDiagDUGA",
  "version" : "2.27.0",
  "name" : "KomplOrganperfDiagDUGA",
  "title" : "Komplikationer pga. organperforation - Diagnosekoder (DUGA)",
  "status" : "active",
  "date" : "2024-02-21T00:00:00+02:00",
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
  "description" : "Komplikationer pga. organperforation - Diagnosekoder (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
        "code" : "DT812G",
        "display" : "DT812G: Utilsigtet peroperativ punktur eller læsion af gastrointestinalkanalen"
      },
      {
        "code" : "DT812H",
        "display" : "DT812H: Utilsigtet peroperativ punktur eller læsion af kvindeligt kønsorgan"
      },
      {
        "code" : "DT812UC",
        "display" : "DT812UC: Utilsigtet peroperativ punktur eller læsion af urinleder"
      },
      {
        "code" : "DT812UD",
        "display" : "DT812UD: Utilsigtet peroperativ punktur eller læsion af urinblære"
      },
      {
        "code" : "DT812UE",
        "display" : "DT812UE: Utilsigtet peroperativ punktur eller læsion af urinrør"
      }]
    }]
  }
}

```
