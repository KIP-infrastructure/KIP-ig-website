# Medical treatment: Medication administration - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical treatment: Medication administration**

## CodeSystem: Medical treatment: Medication administration 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentAdministrationType | *Version*:2.14.1 |
| Active as of 2022-08-17 | *Computable Name*:MedicalTreatmentAdministrationType |

 
Medical treatment: Medication administration 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AdministrationType](ValueSet-AdministrationType.md)
* [AdministrationTypeDCCG](ValueSet-AdministrationTypeDCCG.md)
* [PraeoperativUdrensningDCCG](ValueSet-PraeoperativUdrensningDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedicalTreatmentAdministrationType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentAdministrationType",
  "version" : "2.14.1",
  "name" : "MedicalTreatmentAdministrationType",
  "title" : "Medical treatment: Medication administration",
  "status" : "active",
  "date" : "2022-08-17T00:00:00+02:00",
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
  "description" : "Medical treatment: Medication administration",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "oral",
      "display" : "Oral",
      "definition" : "Oral / SNOMED-CT: 260548002"
    },
    {
      "code" : "intravenous",
      "display" : "Intravenous",
      "definition" : "Intravenous / Intravenøs / SNOMED-CT: 255560000"
    },
    {
      "code" : "peroral",
      "display" : "Peroral",
      "definition" : "Medication administration: oral / peroral medicingivning / SNOMED-CT: 386359008"
    },
    {
      "code" : "rectum",
      "display" : "Rectum",
      "definition" : "Medication administration: rectal / Medicingivning i rectum / SNOMED-CT: 386360003"
    }
  ]
}

```
