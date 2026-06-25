# AK Behandling (DKR) - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AK Behandling (DKR)**

## CodeSystem: AK Behandling (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AKBehandling | *Version*:2.23.0 |
| Active as of 2023-12-18 | *Computable Name*:AKBehandling |

 
AK Behandling (DKR) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AKBehandlingDKR](ValueSet-AKBehandlingDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AKBehandling",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AKBehandling",
  "version" : "2.23.0",
  "name" : "AKBehandling",
  "title" : "AK Behandling (DKR)",
  "status" : "active",
  "date" : "2023-12-18T00:00:00+02:00",
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
  "description" : "AK Behandling (DKR)",
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
    "code" : "clopidogrel",
    "display" : "Clopidogrel (fx Plavix), Ticagrelor (Brilique)",
    "definition" : "Clopidogrel (fx Plavix), Ticagrelor (Brilique)"
  },
  {
    "code" : "persantin",
    "display" : "Persantin",
    "definition" : "Persantin"
  },
  {
    "code" : "orisantin",
    "display" : "Orisantin (Asasantin)",
    "definition" : "Orisantin (Asasantin)"
  },
  {
    "code" : "acetylsalicylsyre",
    "display" : "Acetylsalicylsyre (fx Magnyl)",
    "definition" : "Acetylsalicylsyre (fx Magnyl)"
  },
  {
    "code" : "vitamin_k",
    "display" : "Vitamin-K antagonist (Ma-ravan, Warfarin, Marcoumar)",
    "definition" : "Vitamin-K antagonist (Ma-ravan, Warfarin, Marcoumar)"
  },
  {
    "code" : "noak",
    "display" : "NOAK (fx Xarelto, Pradaxa, Eliquis)",
    "definition" : "NOAK (fx Xarelto, Pradaxa, Eliquis)"
  }]
}

```
