# Udført procedure K2 (DCCG) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udført procedure K2 (DCCG)**

## ValueSet: Udført procedure K2 (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertK2DCCG | *Version*:2.27.3 |
| Active as of 2023-03-02 | *Computable Name*:ProcedureUdfoertK2DCCG |

 
Udført procedure K2 (DCCG) 

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
  "id" : "ProcedureUdfoertK2DCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureUdfoertK2DCCG",
  "version" : "2.27.3",
  "name" : "ProcedureUdfoertK2DCCG",
  "title" : "Udført procedure K2 (DCCG)",
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
  "description" : "Udført procedure K2 (DCCG)",
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
        "code" : "stent_colon",
        "display" : "Stentanlæggelse i colon"
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
