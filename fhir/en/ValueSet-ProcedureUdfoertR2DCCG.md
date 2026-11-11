# Udført procedure R2 (DCCG) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udført procedure R2 (DCCG)**

## ValueSet: Udført procedure R2 (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertR2DCCG | *Version*:2.27.3 |
| Active as of 2023-03-02 | *Computable Name*:ProcedureUdfoertR2DCCG |

 
Udført procedure R2 (DCCG) 

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
  "id" : "ProcedureUdfoertR2DCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertR2DCCG",
  "version" : "2.27.3",
  "name" : "ProcedureUdfoertR2DCCG",
  "title" : "Udført procedure R2 (DCCG)",
  "status" : "active",
  "date" : "2023-03-02T00:00:00+02:00",
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
  "description" : "Udført procedure R2 (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "stoma_shunt",
        "display" : "Kun aflastende stomi eller intern shunt"
      },
      {
        "code" : "exploratory_intervention",
        "display" : "Kun eksplorativt indgreb"
      },
      {
        "code" : "stent_rectum",
        "display" : "Stentanlæggelse i rektum"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden aflastende procedure"
      }]
    }]
  }
}

```
