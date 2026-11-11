# Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR] - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR]**

## ValueSet: Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MedicinalBehandlingPaabegyndtDHR | *Version*:2.27.2 |
| Active as of 2022-07-07 | *Computable Name*:MedicinalBehandlingPaabegyndtDHR |

 
Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MedicinalBehandlingPaabegyndtDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MedicinalBehandlingPaabegyndtDHR",
  "version" : "2.27.2",
  "name" : "MedicinalBehandlingPaabegyndtDHR",
  "title" : "Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR]",
  "status" : "active",
  "date" : "2022-07-07T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalTreatmentStartOf",
      "concept" : [{
        "code" : "before_operation",
        "display" : "Påbegyndt før operation"
      },
      {
        "code" : "after_operation",
        "display" : "Påbegyndt efter operation på OP-dag"
      },
      {
        "code" : "day_after_operation",
        "display" : "Påbegyndt første postoperative dag"
      },
      {
        "code" : "during_admission",
        "display" : "Kun under indlæggelse"
      }]
    }]
  }
}

```
