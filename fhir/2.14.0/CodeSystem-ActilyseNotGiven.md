# Reasons for not giving total dose of actilyse - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reasons for not giving total dose of actilyse**

## CodeSystem: Reasons for not giving total dose of actilyse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ActilyseNotGiven | *Version*:2.14.0 |
| Active as of 2022-06-03 | *Computable Name*:ActilyseNotGiven |

 
Årsagen til hvorfor man ikke har givet totaldosis i.v. actilyse. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ActilyseIkkeGivet](ValueSet-ActilyseIkkeGivet.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ActilyseNotGiven",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ActilyseNotGiven",
  "version" : "2.14.0",
  "name" : "ActilyseNotGiven",
  "title" : "Reasons for not giving total dose of actilyse",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
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
  "description" : "Årsagen til hvorfor man ikke har givet totaldosis i.v. actilyse.",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "clinicaldeterioration",
      "display" : "Klinisk forringelse",
      "definition" : "Klinisk forringelse"
    },
    {
      "code" : "allergicreaction",
      "display" : "Allergisk reaktion",
      "definition" : "Allergisk reaktion"
    },
    {
      "code" : "plannedtreatment",
      "display" : "Planlagt interventionel behandling",
      "definition" : "Planlagt interventionel behandling"
    },
    {
      "code" : "other",
      "display" : "Andet",
      "definition" : "Andet"
    }
  ]
}

```
