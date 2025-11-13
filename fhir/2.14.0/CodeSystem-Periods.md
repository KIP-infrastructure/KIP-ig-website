# Perioder - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Perioder**

## CodeSystem: Perioder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Periods | *Version*:2.14.0 |
| Active as of 2022-11-21 | *Computable Name*:Periods |

 
Kalendermæssige perioder 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PerioderMK](ValueSet-PerioderMK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Periods",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Periods",
  "version" : "2.14.0",
  "name" : "Periods",
  "title" : "Perioder",
  "status" : "active",
  "date" : "2022-11-21T00:00:00+02:00",
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
  "description" : "Kalendermæssige perioder",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "day",
      "display" : "Day",
      "definition" : "Dag"
    },
    {
      "code" : "week",
      "display" : "Week",
      "definition" : "Uge"
    },
    {
      "code" : "month",
      "display" : "Month",
      "definition" : "Måned"
    },
    {
      "code" : "quarter",
      "display" : "Quarter",
      "definition" : "Kvartal"
    },
    {
      "code" : "year",
      "display" : "Year",
      "definition" : "År"
    }
  ]
}

```
