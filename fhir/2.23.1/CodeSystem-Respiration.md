# Plan for eller støtte til luftvejsassistance - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Plan for eller støtte til luftvejsassistance**

## CodeSystem: Plan for eller støtte til luftvejsassistance 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Respiration | *Version*:2.23.1 |
| Active as of 2022-06-01 | *Computable Name*:Respiration |

 
Mulige indgreb vedr luftvejsstøtte 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LuftvejForsoeg](ValueSet-LuftvejForsoeg.md)
* [LuftvejsHaandtering](ValueSet-LuftvejsHaandtering.md)
* [LuftvejsHaandtering2026](ValueSet-LuftvejsHaandtering2026.md)
* [LuftvejsHaandteringsidsteforsoeg](ValueSet-LuftvejsHaandteringsidsteforsoeg.md)
* [Luftvejsplan](ValueSet-Luftvejsplan.md)
* [Luftvejsplan2026](ValueSet-Luftvejsplan2026.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Respiration",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Respiration",
  "version" : "2.23.1",
  "name" : "Respiration",
  "title" : "Plan for eller støtte til luftvejsassistance",
  "status" : "active",
  "date" : "2022-06-01T00:00:00+02:00",
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
  "description" : "Mulige indgreb vedr luftvejsstøtte",
  "content" : "complete",
  "count" : 16,
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
    "code" : "spontane_resp",
    "display" : "Spontane respiration",
    "definition" : "Spontan respiration"
  },
  {
    "code" : "spontane_resp_only",
    "display" : "Spontane respiration ONLY",
    "definition" : "KUN spontan respiration"
  },
  {
    "code" : "mask_vent",
    "display" : "Mask ventilation",
    "definition" : "Maskeventilation"
  },
  {
    "code" : "larynx_all",
    "display" : "Larynx mask (all types)",
    "definition" : "Larynxmaske (alle typer)"
  },
  {
    "code" : "intubation",
    "display" : "Intubation",
    "definition" : "Intubation"
  },
  {
    "code" : "intub_dir_laryngo",
    "display" : "Intubation by direct laryngoskopia",
    "definition" : "Intubation ved direkte laryngoskopi"
  },
  {
    "code" : "intub_video_laryngo",
    "display" : "Intubation using videolaryngoskopia",
    "definition" : "Intubation med videolaryngoskopi"
  },
  {
    "code" : "intub_flex_skop",
    "display" : "Intubation using flexibal skop",
    "definition" : "Intubation med fleksibelt skopi"
  },
  {
    "code" : "intub_diff",
    "display" : "Intubation using different method",
    "definition" : "Intubation ved anden metode"
  },
  {
    "code" : "tracheostomi",
    "display" : "Tracheostomi",
    "definition" : "Tracheostomi"
  },
  {
    "code" : "tracheostomi_loc",
    "display" : "Tracheostomi in local anesthesia",
    "definition" : "Tracheostomi i lokalanæstesi"
  },
  {
    "code" : "tracheostomi_emg",
    "display" : "Emergency tracheostomi",
    "definition" : "Nødtracheostomi"
  },
  {
    "code" : "patient",
    "display" : "Vækning af patient",
    "definition" : "Vækning af patient"
  },
  {
    "code" : "is_intub_trach",
    "display" : "Already intubated/tracheostometered",
    "definition" : "Er intuberet/tracheostomeret"
  },
  {
    "code" : "without_further",
    "display" : "No further action relevant",
    "definition" : "Intet yderligere"
  },
  {
    "code" : "na",
    "display" : "Not applicable",
    "definition" : "Ikke relevant"
  }]
}

```
