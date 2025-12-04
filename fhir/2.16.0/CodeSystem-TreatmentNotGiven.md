# Treatment not given; cause - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment not given; cause**

## CodeSystem: Treatment not given; cause 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentNotGiven | *Version*:2.16.0 |
| Active as of 2022-08-23 | *Computable Name*:TreatmentNotGiven |

 
Treatment not given; cause 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ManglendeBehandling](ValueSet-ManglendeBehandling.md)
* [ManglendeEORTC](ValueSet-ManglendeEORTC.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentNotGiven",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentNotGiven",
  "version" : "2.16.0",
  "name" : "TreatmentNotGiven",
  "title" : "Treatment not given; cause",
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
  "description" : "Treatment not given; cause",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "unsuitable",
      "display" : "Unsuitable for treatment",
      "definition" : "Unsuitable for treatment / Uegnet til behandling"
    },
    {
      "code" : "unwanted",
      "display" : "Unwanted treatment",
      "definition" : "Unwanted treatment / Ønskede ikke behandling"
    },
    {
      "code" : "died",
      "display" : "Died before treatment",
      "definition" : "Died before treatment / Døde før behandling"
    },
    {
      "code" : "lack_capacity",
      "display" : "Lack of capacity",
      "definition" : "Lack of capacity / Manglende kapacitet"
    },
    {
      "code" : "other_palliative_department",
      "display" : "Other palliative department",
      "definition" : "Other palliative department / Behandlet af anden palliativ enhed"
    },
    {
      "code" : "bad_condition",
      "display" : "Bad condition",
      "definition" : "Bad condition / For dårlig"
    }
  ]
}

```
