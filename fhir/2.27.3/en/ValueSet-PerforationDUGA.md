# Perforation (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Perforation (DUGA)**

## ValueSet: Perforation (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PerforationDUGA | *Version*:2.27.3 |
| Active as of 2024-02-14 | *Computable Name*:PerforationDUGA |

 
Procedurekode - Perforation (DUGA) 

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
  "id" : "PerforationDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PerforationDUGA",
  "version" : "2.27.3",
  "name" : "PerforationDUGA",
  "title" : "Perforation (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Procedurekode - Perforation (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureUrogyn",
      "concept" : [{
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
