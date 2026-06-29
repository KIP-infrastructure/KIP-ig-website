# Revision; cause - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision; cause**

## CodeSystem: Revision; cause 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RevisionCause | *Version*:2.23.1 |
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
  "version" : "2.23.1",
  "name" : "RevisionCause",
  "title" : "Revision; cause",
  "status" : "active",
  "date" : "2022-09-15T00:00:00+02:00",
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
  "description" : "Revision; cause",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
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
  }]
}

```
