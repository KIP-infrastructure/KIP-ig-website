# Treatment unspecified - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment unspecified**

## CodeSystem: Treatment unspecified 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentUnspecified | *Version*:2.23.0 |
| Active as of 2025-07-10 | *Computable Name*:TreatmentUnspecified |

 
Treatment unspecified 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ATCDMPN](ValueSet-ATCDMPN.md)
* [ATCDMPN202410](ValueSet-ATCDMPN202410.md)
* [BehandlingCMMLMDS](ValueSet-BehandlingCMMLMDS.md)
* [BehandlingMDS](ValueSet-BehandlingMDS.md)
* [Immunoterapi](ValueSet-Immunoterapi.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentUnspecified",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentUnspecified",
  "version" : "2.23.0",
  "name" : "TreatmentUnspecified",
  "title" : "Treatment unspecified",
  "status" : "active",
  "date" : "2025-07-10T00:00:00+02:00",
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
  "description" : "Treatment unspecified",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 7,
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
    "code" : "glofitamab",
    "display" : "Glofitamab",
    "definition" : "Glofitamab"
  },
  {
    "code" : "incision_vein",
    "display" : "Incision of Vein",
    "definition" : "Incision of Vein / Venesektion"
  },
  {
    "code" : "demethylating",
    "display" : "Demethylating treatment",
    "definition" : "Demethylating treatment / Demethylerende behandling"
  },
  {
    "code" : "chemotherapi_aml",
    "display" : "AML-like chemotherapy",
    "definition" : "AML-like chemotherapy / AML lignende kemoterapi"
  },
  {
    "code" : "g_csf",
    "display" : "G-CSF",
    "definition" : "G-CSF"
  },
  {
    "code" : "iron_chelated",
    "display" : "Iron chelated",
    "definition" : "Iron chelated / Jernkelerende behandling"
  },
  {
    "code" : "Polatuzumab",
    "display" : "Bispecifikke+Polatuzumab Incl evt. Rituximab",
    "definition" : "Bispecifikke+Polatuzumab Incl evt. Rituximab"
  }]
}

```
