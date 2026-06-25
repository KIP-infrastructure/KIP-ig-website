# Activity type - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Activity type**

## CodeSystem: Activity type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ActivityType | *Version*:2.23.0 |
| Active as of 2022-09-15 | *Computable Name*:ActivityType |

 
Activity type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AktivitetDKRR](ValueSet-AktivitetDKRR.md)
* [AktivitetSportDKRR](ValueSet-AktivitetSportDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ActivityType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ActivityType",
  "version" : "2.23.0",
  "name" : "ActivityType",
  "title" : "Activity type",
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
  "description" : "Activity type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 14,
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
    "code" : "adl",
    "display" : "ADL",
    "definition" : "ADL"
  },
  {
    "code" : "sports",
    "display" : "Sports",
    "definition" : "Sports / Sport",
    "concept" : [{
      "code" : "football",
      "display" : "Football",
      "definition" : "Football / Fodbold"
    },
    {
      "code" : "handball",
      "display" : "Handball",
      "definition" : "Handball / Håndbold"
    },
    {
      "code" : "alpine",
      "display" : "Alpine",
      "definition" : "Alpine / Alpint"
    },
    {
      "code" : "snowboard",
      "display" : "Snowboard",
      "definition" : "Snowboard"
    },
    {
      "code" : "cross-country_skiing",
      "display" : "Cross-country skiing",
      "definition" : "Cross-country skiing / Langrend"
    },
    {
      "code" : "ice_hockey",
      "display" : "Ice hockey",
      "definition" : "Ice hockey / Ishockey"
    },
    {
      "code" : "badminton",
      "display" : "Badminton",
      "definition" : "Badminton"
    },
    {
      "code" : "tennis_squash",
      "display" : "Tennis/Squash",
      "definition" : "Tennis/Squash"
    },
    {
      "code" : "martial_arts",
      "display" : "Martial arts",
      "definition" : "Martial arts / Kampsport"
    },
    {
      "code" : "basketball",
      "display" : "Basketball",
      "definition" : "Basketball"
    }]
  },
  {
    "code" : "trafic",
    "display" : "Trafic",
    "definition" : "Trafic / Trafik"
  },
  {
    "code" : "work",
    "display" : "Work",
    "definition" : "Work / Arbejde"
  }]
}

```
