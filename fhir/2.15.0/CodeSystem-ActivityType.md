# Activity type - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Activity type**

## CodeSystem: Activity type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ActivityType | *Version*:2.15.0 |
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
  "version" : "2.15.0",
  "name" : "ActivityType",
  "title" : "Activity type",
  "status" : "active",
  "date" : "2022-09-15T00:00:00+02:00",
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
  "description" : "Activity type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 14,
  "concept" : [
    {
      "code" : "adl",
      "display" : "ADL",
      "definition" : "ADL"
    },
    {
      "code" : "sports",
      "display" : "Sports",
      "definition" : "Sports / Sport",
      "concept" : [
        {
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
        }
      ]
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
    }
  ]
}

```
