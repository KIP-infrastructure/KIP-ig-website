# Treatment psychopharmacological - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment psychopharmacological**

## CodeSystem: Treatment psychopharmacological 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentPsychopharmacological | *Version*:2.17.1 |
| Active as of 2022-07-12 | *Computable Name*:TreatmentPsychopharmacological |

 
Treatment psychopharmacological 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingPsykofarmakologiskRETSPSYK](ValueSet-BehandlingPsykofarmakologiskRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentPsychopharmacological",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentPsychopharmacological",
  "version" : "2.17.1",
  "name" : "TreatmentPsychopharmacological",
  "title" : "Treatment psychopharmacological",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Treatment psychopharmacological",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "antipsychotics",
      "display" : "Antipsychotics",
      "definition" : "Antipsychotics / Antipsykotika"
    },
    {
      "code" : "antipsychotics_depot",
      "display" : "Antipsychotics, depot",
      "definition" : "Antipsychotics, depot / Antipsykotika, depot"
    },
    {
      "code" : "antidepressants",
      "display" : "Antidepressants",
      "definition" : "Antidepressants / Antidepressiva"
    },
    {
      "code" : "mood_stabilizer",
      "display" : "Mood stabilizer",
      "definition" : "Mood stabilizer / Stemningsstabiliserende"
    },
    {
      "code" : "benzodiazepines",
      "display" : "Benzodiazepines",
      "definition" : "Benzodiazepines / Benzodiazepiner"
    },
    {
      "code" : "central_stimulants",
      "display" : "Central stimulants",
      "definition" : "Central stimulants / Centralstimulerende medicin"
    }
  ]
}

```
