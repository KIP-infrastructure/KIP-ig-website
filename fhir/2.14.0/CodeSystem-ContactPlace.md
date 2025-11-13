# Contact; Place of contact - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Contact; Place of contact**

## CodeSystem: Contact; Place of contact 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ContactPlace | *Version*:2.14.0 |
| Active as of 2022-08-23 | *Computable Name*:ContactPlace |

 
Contact; Place of contact 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KontaktSted](ValueSet-KontaktSted.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ContactPlace",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ContactPlace",
  "version" : "2.14.0",
  "name" : "ContactPlace",
  "title" : "Contact; Place of contact",
  "status" : "active",
  "date" : "2022-08-23T00:00:00+02:00",
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
  "description" : "Contact; Place of contact",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "outpatient_clinic",
      "display" : "Outpatient clinic",
      "definition" : "Outpatient clinic / Ambulatorium"
    },
    {
      "code" : "home_visit",
      "display" : "Home visit",
      "definition" : "Home visit / Hjemmebesøg / SNOMED-CT: 439708006"
    },
    {
      "code" : "oversight",
      "display" : "Oversight",
      "definition" : "Oversight on another department / Tilsyn anden afdeling uden samtidig tilknytning af patienten til det palliative team"
    },
    {
      "code" : "oversight_palliative",
      "display" : "Oversight (Palliative)",
      "definition" : "Oversight on another department (Palliative) / Tilsyn anden afdeling med samtidig tilknytning af patienten til det palliative team"
    }
  ]
}

```
