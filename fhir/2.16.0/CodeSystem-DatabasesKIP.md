# Databaser - KIP - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Databaser - KIP**

## CodeSystem: Databaser - KIP 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DatabasesKIP | *Version*:2.16.0 |
| Active as of 2023-03-15 | *Computable Name*:DatabasesKIP |

 
Databaser i KIP 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DatabasesHAEMA](ValueSet-DatabasesHAEMA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DatabasesKIP",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DatabasesKIP",
  "version" : "2.16.0",
  "name" : "DatabasesKIP",
  "title" : "Databaser - KIP",
  "status" : "active",
  "date" : "2023-03-15T00:00:00+02:00",
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
  "description" : "Databaser i KIP",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "ALD",
      "display" : "ALD",
      "definition" : "HÆMA - ALD"
    },
    {
      "code" : "DAMYDA",
      "display" : "DAMYDA",
      "definition" : "HÆMA - DAMYDA"
    },
    {
      "code" : "MDS",
      "display" : "MDS",
      "definition" : "HÆMA - MDS"
    }
  ]
}

```
