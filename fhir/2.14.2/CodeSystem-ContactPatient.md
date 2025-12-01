# Kontakt til patient - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kontakt til patient**

## CodeSystem: Kontakt til patient 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ContactPatient | *Version*:2.14.2 |
| Active as of 2024-02-21 | *Computable Name*:ContactPatient |

 
Kontakttype til patient - Undersøgelse, interview, mv. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KontaktPatient](ValueSet-KontaktPatient.md)
* [ObservationPatient](ValueSet-ObservationPatient.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ContactPatient",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ContactPatient",
  "version" : "2.14.2",
  "name" : "ContactPatient",
  "title" : "Kontakt til patient",
  "status" : "active",
  "date" : "2024-02-21T00:00:00+02:00",
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
  "description" : "Kontakttype til patient - Undersøgelse, interview, mv.",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "interview",
      "display" : "Gennemført interview",
      "definition" : "Gennemført interview/undersøgelse"
    },
    {
      "code" : "spoergeskema",
      "display" : "Selvudfyldt spørgeskema",
      "definition" : "Selvudfyldt spørgeskema"
    },
    {
      "code" : "samtale",
      "display" : "Personlig samtale",
      "definition" : "Personlig samtale"
    },
    {
      "code" : "ikke-etableret",
      "display" : "Ikke etableret",
      "definition" : "Forsøgt, men ikke opnået"
    },
    {
      "code" : "PRO_spg",
      "display" : "PRO-spørgeskema sendt til patienten via Digital Post",
      "definition" : "PRO-spørgeskema sendt til patienten via Digital Post"
    }
  ]
}

```
