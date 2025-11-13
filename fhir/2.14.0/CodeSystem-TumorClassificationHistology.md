# Histologisk klassifikation (fordøjelsessystemet) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Histologisk klassifikation (fordøjelsessystemet)**

## CodeSystem: Histologisk klassifikation (fordøjelsessystemet) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TumorClassificationHistology | *Version*:2.14.0 |
| Active as of 2022-05-31 | *Computable Name*:TumorClassificationHistology |

 
Tumor klassificeres histologisk jvf. WHO Classification of Tumours of the Digestive System. Link: https://dccg.dk/wp-content/uploads/2017/08/Tumorklassifikation.pdf 

 This Code system is referenced in the content logical definition of the following value sets: 

* [TumorklassifikationBehandlingDEGC](ValueSet-TumorklassifikationBehandlingDEGC.md)
* [TumorklassifikationDEGC](ValueSet-TumorklassifikationDEGC.md)
* [TumorklassifikationDiagnoseDEGC](ValueSet-TumorklassifikationDiagnoseDEGC.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TumorClassificationHistology",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TumorClassificationHistology",
  "version" : "2.14.0",
  "name" : "TumorClassificationHistology",
  "title" : "Histologisk\tklassifikation (fordøjelsessystemet)",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Tumor klassificeres histologisk jvf. WHO Classification of Tumours of the Digestive System. Link: https://dccg.dk/wp-content/uploads/2017/08/Tumorklassifikation.pdf",
  "content" : "complete",
  "count" : 12,
  "concept" : [
    {
      "code" : "adenocarcinoma",
      "display" : "Adenokarcinom",
      "definition" : "Adenokarcinom",
      "concept" : [
        {
          "code" : "glandular",
          "display" : "Adenokarcinom (glandulær)",
          "definition" : "Adenokarcinom af glandulær type"
        },
        {
          "code" : "lowdifferentiated",
          "display" : "Adenokarcinom (lavt differentieret)",
          "definition" : "Lavt differentieret adenokarcinom"
        },
        {
          "code" : "mucinous",
          "display" : "Adenokarcinom (mucinøst)",
          "definition" : "Mucinøst adenokarcinom (> 50% af tumorarealet udgøres af mucin)"
        }
      ]
    },
    {
      "code" : "carcinoma",
      "display" : "Karcinom",
      "definition" : "Karcinom",
      "concept" : [
        {
          "code" : "signetringcell",
          "display" : "Signetringscelle karcinom",
          "definition" : "Signetringscelle karcinom (> 50% af tumorcellerne er signetringsceller)"
        },
        {
          "code" : "planocellular",
          "display" : "Planocellulært karcinom",
          "definition" : "Planocellulært karcinom"
        },
        {
          "code" : "adenoquamous",
          "display" : "Adenoskvamøst karcinom",
          "definition" : "Adenoskvamøst karcinom"
        },
        {
          "code" : "undifferentiated",
          "display" : "Udifferentieret karcinom",
          "definition" : "Udifferentieret karcinom"
        },
        {
          "code" : "medullary",
          "display" : "Medullært karcinom",
          "definition" : "Medullært karcinom"
        },
        {
          "code" : "other",
          "display" : "Anden type karcinom",
          "definition" : "Anden type karcinom"
        },
        {
          "code" : "noresidualtumor",
          "display" : "Ingen resttumor",
          "definition" : "Ingen resttumor"
        }
      ]
    }
  ]
}

```
