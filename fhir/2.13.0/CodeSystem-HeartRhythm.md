# Hjerterytme - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjerterytme**

## CodeSystem: Hjerterytme 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HeartRhythm | *Version*:2.13.0 |
| Active as of 2022-06-22 | *Computable Name*:HeartRhythm |

 
Patientens hjerterytme 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HeartRhythm](ValueSet-HeartRhythm.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HeartRhythm",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HeartRhythm",
  "version" : "2.13.0",
  "name" : "HeartRhythm",
  "title" : "Hjerterytme",
  "status" : "active",
  "date" : "2022-06-22T00:00:00+02:00",
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
  "description" : "Patientens hjerterytme",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "sr",
      "display" : "SR",
      "definition" : "Hvis SR"
    },
    {
      "code" : "afliafla",
      "display" : "Afli/Afla",
      "definition" : "Hvis Afli/Afla"
    }
  ]
}

```
