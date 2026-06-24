# TreatmentIntention - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TreatmentIntention**

## CodeSystem: TreatmentIntention 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIntention | *Version*:2.21.0 |
| Active as of 2022-06-03 | *Computable Name*:TreatmentIntention |

 
Behandlingsintention for kræft databaserne 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ALDkemoterapi](ValueSet-ALDkemoterapi.md)
* [Behandlingsintention](ValueSet-Behandlingsintention.md)
* [Chemotherapy](ValueSet-Chemotherapy.md)
* [OnkologiBehandlingsintention](ValueSet-OnkologiBehandlingsintention.md)
* [OperativtSigteDCCG](ValueSet-OperativtSigteDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentIntention",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIntention",
  "version" : "2.21.0",
  "name" : "TreatmentIntention",
  "title" : "TreatmentIntention",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Behandlingsintention for kræft databaserne",
  "content" : "complete",
  "count" : 8,
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
    "code" : "curative",
    "display" : "Kurativt",
    "definition" : "Kurativt intenderet",
    "concept" : [{
      "code" : "surgical/endoscopic",
      "display" : "Kirurgi/endoskopi",
      "definition" : "Kurativt intenderet, kirurgi/endoskopi"
    },
    {
      "code" : "oncological",
      "display" : "Onkologisk",
      "definition" : "Kurativt intenderet, definitiv onkologisk"
    }]
  },
  {
    "code" : "palliative",
    "display" : "Palliativt",
    "definition" : "Palliativt intenderet"
  },
  {
    "code" : "compromised_resection",
    "display" : "Compromised resection",
    "definition" : "Compromised resection"
  },
  {
    "code" : "recidiv",
    "display" : "Recurrent",
    "definition" : "Recidiv"
  },
  {
    "code" : "semiintensiv",
    "display" : "Semiintensiv",
    "definition" : "Semiintensiv"
  },
  {
    "code" : "intensive",
    "display" : "Intensiv",
    "definition" : "Intensiv"
  }]
}

```
