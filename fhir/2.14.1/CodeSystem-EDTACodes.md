# EDTA koder (DNSL) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDTA koder (DNSL)**

## CodeSystem: EDTA koder (DNSL) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EDTACodes | *Version*:2.14.1 |
| Active as of 2024-01-10 | *Computable Name*:EDTACodes |

 
EDTA koder (DNSL) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EDTAHaemodialyseDNSL](ValueSet-EDTAHaemodialyseDNSL.md)
* [EDTAPeritonedialyseDNSL](ValueSet-EDTAPeritonedialyseDNSL.md)
* [EDTATransplantationDNSL](ValueSet-EDTATransplantationDNSL.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EDTACodes",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EDTACodes",
  "version" : "2.14.1",
  "name" : "EDTACodes",
  "title" : "EDTA koder (DNSL)",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "EDTA koder (DNSL)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 23,
  "concept" : [
    {
      "code" : "EDTA10",
      "display" : "EDTA10, Center-hæmodialyse",
      "definition" : "EDTA 10, Center-hæmodialyse"
    },
    {
      "code" : "EDTA11",
      "display" : "EDTA11, Limited-care dialyse",
      "definition" : "EDTA 11, Limited-care dialyse"
    },
    {
      "code" : "EDTA20",
      "display" : "EDTA20, Hjemme-hæmodialyse",
      "definition" : "EDTA 20, Hjemme-hæmodialyse"
    },
    {
      "code" : "EDTA30",
      "display" : "EDTA30, IPD-dialyse (hospital)",
      "definition" : "EDTA 30, IPD-dialyse (hospital)"
    },
    {
      "code" : "EDTA40",
      "display" : "EDTA40, CAPD-dialyse",
      "definition" : "EDTA 40, CAPD-dialyse"
    },
    {
      "code" : "EDTA41",
      "display" : "EDTA41, APD-dialyse",
      "definition" : "EDTA 41, APD-dialyse"
    },
    {
      "code" : "EDTA45",
      "display" : "EDTA45, Blandet PDHD-dialyse",
      "definition" : "EDTA 45, Blandet PDHD-dialyse"
    },
    {
      "code" : "EDTA46",
      "display" : "EDTA46, Assisteret PD (kun professionel; husk også at indtaste APD(CAPD))",
      "definition" : "EDTA 46, Assisteret PD (kun professionel; husk også at indtaste APD(CAPD))"
    },
    {
      "code" : "EDTA46a",
      "display" : "EDTA46a, Assisteret CAPD (kun professionel)",
      "definition" : "EDTA 46a, Assisteret CAPD (kun professionel)"
    },
    {
      "code" : "EDTA46b",
      "display" : "EDTA46b, Assisteret APD (kun professionel)",
      "definition" : "EDTA 46b, Assisteret APD (kun professionel)"
    },
    {
      "code" : "EDTA50",
      "display" : "EDTA50, Transplantation",
      "definition" : "EDTA50, Transplantation"
    },
    {
      "code" : "EDTA60",
      "display" : "EDTA60, Nyrefunktion start",
      "definition" : "EDTA60, Nyrefunktion start"
    },
    {
      "code" : "EDTA61",
      "display" : "EDTA61, Akut rejektion",
      "definition" : "EDTA61, Akut rejektion"
    },
    {
      "code" : "EDTA70",
      "display" : "EDTA70, Grafttab, irreversibelt (årsag ukendt)",
      "definition" : "EDTA70, Grafttab, irreversibelt (årsag ukendt)"
    },
    {
      "code" : "EDTA71",
      "display" : "EDTA71, Grafttab, hyperakut rejektion",
      "definition" : "EDTA71, Grafttab, hyperakut rejektion"
    },
    {
      "code" : "EDTA72",
      "display" : "EDTA72, Grafttab, rejektion (med immunosuppressiv beh.)",
      "definition" : "EDTA72, Grafttab, rejektion (med immunosuppressiv beh.)"
    },
    {
      "code" : "EDTA73",
      "display" : "EDTA73, Grafttab, rejektion (uden immunosuppressiv beh.)",
      "definition" : "EDTA73, Grafttab, rejektion (uden immunosuppressiv beh.)"
    },
    {
      "code" : "EDTA74",
      "display" : "EDTA74, Grafttab, reccurent primær renal lidelse",
      "definition" : "EDTA74, Grafttab, reccurent primær renal lidelse"
    },
    {
      "code" : "EDTA75",
      "display" : "EDTA75, Grafttab, vasculær/ureter operativt problem",
      "definition" : "EDTA75, Grafttab, vasculær/ureter operativt problem"
    },
    {
      "code" : "EDTA76",
      "display" : "EDTA76, Grafttab, vasculær thrombose uden op problem",
      "definition" : "EDTA76, Grafttab, vasculær thrombose uden op problem"
    },
    {
      "code" : "EDTA77",
      "display" : "EDTA77, Grafttab, infektion",
      "definition" : "EDTA77, Grafttab, infektion"
    },
    {
      "code" : "EDTA78",
      "display" : "EDTA78, Grafttab, fjernelse af fungerende graft",
      "definition" : "EDTA78, Grafttab, fjernelse af fungerende graft"
    },
    {
      "code" : "EDTA79",
      "display" : "EDTA79, Grafttab, ikke-fungerende graft",
      "definition" : "EDTA79, Grafttab, ikke-fungerende graft"
    }
  ]
}

```
