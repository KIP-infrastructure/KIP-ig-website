# Udskrevet til - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Udskrevet til**

## CodeSystem: Udskrevet til 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/UdskrevetTil | *Version*:2.15.0 |
| Active as of 2022-06-13 | *Computable Name*:UdskrevetTil |

 
Udskrevet til 

 This Code system is referenced in the content logical definition of the following value sets: 

* [UdskrevetTil](ValueSet-UdskrevetTil.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "UdskrevetTil",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/UdskrevetTil",
  "version" : "2.15.0",
  "name" : "UdskrevetTil",
  "title" : "Udskrevet til",
  "status" : "active",
  "date" : "2022-06-13T00:00:00+02:00",
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
  "description" : "Udskrevet til",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "stamafd",
      "display" : "Stamafdeling",
      "definition" : "Stamafdeling"
    },
    {
      "code" : "hjemmet",
      "display" : "Hjemmet",
      "definition" : "Hjemmet"
    },
    {
      "code" : "reoper",
      "display" : "Reoperation",
      "definition" : "Reoperation"
    },
    {
      "code" : "intensiv",
      "display" : "Intensiv",
      "definition" : "Intensiv afdeling"
    },
    {
      "code" : "andet_hosp",
      "display" : "Andet hospital",
      "definition" : "Andet hospital"
    },
    {
      "code" : "doed_u_obs",
      "display" : "Død under obs.",
      "definition" : "Død i observationsperioden"
    }
  ]
}

```
