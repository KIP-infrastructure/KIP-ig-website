# Radiation therapy type - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Radiation therapy type**

## CodeSystem: Radiation therapy type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyType | *Version*:2.14.0 |
| Active as of 2022-07-15 | *Computable Name*:RadiationTherapyType |

 
Radiation therapy type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [StraaleterapiLYFO](ValueSet-StraaleterapiLYFO.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RadiationTherapyType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyType",
  "version" : "2.14.0",
  "name" : "RadiationTherapyType",
  "title" : "Radiation therapy type",
  "status" : "active",
  "date" : "2022-07-15T00:00:00+02:00",
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
  "description" : "Radiation therapy type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "involved_node",
      "display" : "Involved node",
      "definition" : "Involved node"
    },
    {
      "code" : "involved_field",
      "display" : "Involved field",
      "definition" : "Involved field"
    },
    {
      "code" : "extended_field",
      "display" : "Extended field",
      "definition" : "Extended field"
    },
    {
      "code" : "total_body_irradiation",
      "display" : "Total body irradiation",
      "definition" : "Total body irradiation"
    },
    {
      "code" : "coat_field",
      "display" : "Coat field",
      "definition" : "Coat field"
    },
    {
      "code" : "tbi_involed_field",
      "display" : "TBI + Involved field",
      "definition" : "TBI + Involved field"
    }
  ]
}

```
