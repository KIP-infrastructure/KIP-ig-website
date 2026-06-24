# Treatment psychopharmacological - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment psychopharmacological**

## CodeSystem: Treatment psychopharmacological 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentPsychopharmacological | *Version*:2.21.0 |
| Active as of 2022-07-12 | *Computable Name*:TreatmentPsychopharmacological |

 
Treatment psychopharmacological 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingPsykofarmakologiskRETSPSYK](ValueSet-BehandlingPsykofarmakologiskRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentPsychopharmacological",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentPsychopharmacological",
  "version" : "2.21.0",
  "name" : "TreatmentPsychopharmacological",
  "title" : "Treatment psychopharmacological",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Treatment psychopharmacological",
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
    "code" : "antipsychotics",
    "display" : "Antipsychotics",
    "definition" : "Antipsychotics / Antipsykotika"
  },
  {
    "code" : "antipsychotics_depot",
    "display" : "Antipsychotics, depot",
    "definition" : "Antipsychotics, depot / Antipsykotika, depot"
  },
  {
    "code" : "antidepressants",
    "display" : "Antidepressants",
    "definition" : "Antidepressants / Antidepressiva"
  },
  {
    "code" : "mood_stabilizer",
    "display" : "Mood stabilizer",
    "definition" : "Mood stabilizer / Stemningsstabiliserende"
  },
  {
    "code" : "benzodiazepines",
    "display" : "Benzodiazepines",
    "definition" : "Benzodiazepines / Benzodiazepiner"
  },
  {
    "code" : "central_stimulants",
    "display" : "Central stimulants",
    "definition" : "Central stimulants / Centralstimulerende medicin"
  }]
}

```
