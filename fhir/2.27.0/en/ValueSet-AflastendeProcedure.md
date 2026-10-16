# Aflastende procedure DCCG - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aflastende procedure DCCG**

## ValueSet: Aflastende procedure DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AflastendeProcedure | *Version*:2.27.0 |
| Active as of 2022-09-07 | *Computable Name*:AflastendeProcedure |

 
Aflastende procedure DCCG 

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
  "id" : "AflastendeProcedure",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AflastendeProcedure",
  "version" : "2.27.0",
  "name" : "AflastendeProcedure",
  "title" : "Aflastende procedure DCCG",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Aflastende procedure DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      },
      {
        "code" : "other",
        "display" : "Anden"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "stent",
        "display" : "Stent"
      },
      {
        "code" : "stoma_shunt",
        "display" : "Aflastende stomi"
      },
      {
        "code" : "damage_control",
        "display" : "Damage controle"
      }]
    }]
  }
}

```
