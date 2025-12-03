# Revision; cause - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision; cause**

## CodeSystem: Revision; cause 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RevisionCause | *Version*:2.15.0 |
| Active as of 2022-09-15 | *Computable Name*:RevisionCause |

 
Revision; cause 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RevisionAarsagDKRR](ValueSet-RevisionAarsagDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RevisionCause",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionCause",
  "version" : "2.15.0",
  "name" : "RevisionCause",
  "title" : "Revision; cause",
  "status" : "active",
  "date" : "2022-09-15T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Revision; cause",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "trauma",
      "display" : "Trauma",
      "definition" : "Trauma / traume"
    },
    {
      "code" : "tunnelwidening",
      "display" : "Tunnelwidening",
      "definition" : "Tunnelwidening"
    },
    {
      "code" : "suboptimal_graft_tibia",
      "display" : "Suboptimal graft; placement in tibia",
      "definition" : "Suboptimal graft; placement in tibia / Suboptimal graft placering i tibia"
    },
    {
      "code" : "suboptimal_graft_femur",
      "display" : "Suboptimal graft; placement in femur",
      "definition" : "Suboptimal graft; placement in femur / Suboptimal graft placering i femur"
    },
    {
      "code" : "infection",
      "display" : "Infection",
      "definition" : "Infection / Infektion"
    },
    {
      "code" : "ligamental_instability",
      "display" : "Other ligamental looseness causing instability",
      "definition" : "Other ligamental looseness causing instability / Anden ligamentær løshed som årsag til ny instabilitet"
    }
  ]
}

```
