# Behandlingsrespons CML - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandlingsrespons CML**

## ValueSet: Behandlingsrespons CML 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingsresponsCML | *Version*:2.27.1 |
| Active as of 2022-07-18 | *Computable Name*:BehandlingsresponsCML |

 
Vurdering af behandlingsrespons CML 

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
  "id" : "BehandlingsresponsCML",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingsresponsCML",
  "version" : "2.27.1",
  "name" : "BehandlingsresponsCML",
  "title" : "Behandlingsrespons CML",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Vurdering af behandlingsrespons CML",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentResponseEvaluation",
      "concept" : [{
        "code" : "complete_hematological_response",
        "display" : "Komplet hæmatologisk respons (CHR)"
      },
      {
        "code" : "complete_cytogenetic_response",
        "display" : "Komplet cytogenetisk Respons (CCyR)"
      },
      {
        "code" : "partial_cytogenetic_response",
        "display" : "Partiel cytogenetisk Respons (PCyR)"
      },
      {
        "code" : "major_molecular_response",
        "display" : "Major molekylært Respons (MMR)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ikke målbar molekylær sygdom"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uoplyst"
      }]
    }]
  }
}

```
