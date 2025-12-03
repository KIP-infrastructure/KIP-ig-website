# Procedure type: Codes for different durations - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedure type: Codes for different durations**

## CodeSystem: Procedure type: Codes for different durations 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType | *Version*:2.15.0 |
| Active as of 2022-07-20 | *Computable Name*:ProcedureType |

 
Procedure type: Codes for different durations 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AflastendeProcedure](ValueSet-AflastendeProcedure.md)
* [IndgrebAabenIngvinalhernieDHDB](ValueSet-IndgrebAabenIngvinalhernieDHDB.md)
* [IndgrebAabenMeshIngvinalhernieDHDB](ValueSet-IndgrebAabenMeshIngvinalhernieDHDB.md)
* [IndgrebComponentsSeparationDHDB](ValueSet-IndgrebComponentsSeparationDHDB.md)
* [IndgrebComponentsSeparationTypeDHDB](ValueSet-IndgrebComponentsSeparationTypeDHDB.md)
* [IndgrebFemoralhernieDHDB](ValueSet-IndgrebFemoralhernieDHDB.md)
* [IndgrebIngvinalhernieDHDB](ValueSet-IndgrebIngvinalhernieDHDB.md)
* [IndgrebLaparoskopiskDHDB](ValueSet-IndgrebLaparoskopiskDHDB.md)
* [IndgrebVentralhernieAndenDHDB](ValueSet-IndgrebVentralhernieAndenDHDB.md)
* [IndgrebVentralhernieDHDB](ValueSet-IndgrebVentralhernieDHDB.md)
* [LedbaandsrekonstruktionDKRR](ValueSet-LedbaandsrekonstruktionDKRR.md)
* [OperationerAktuelDKRR](ValueSet-OperationerAktuelDKRR.md)
* [OperationerDKRR](ValueSet-OperationerDKRR.md)
* [OperativProcedureKategoriDCCG](ValueSet-OperativProcedureKategoriDCCG.md)
* [OperativProcedureKategoriKolonDCCG](ValueSet-OperativProcedureKategoriKolonDCCG.md)
* [OperativProcedureKategoriRektumDCCG](ValueSet-OperativProcedureKategoriRektumDCCG.md)
* [PeroperativMetastasebehandling](ValueSet-PeroperativMetastasebehandling.md)
* [PraeoperativPlanlaegningDSR](ValueSet-PraeoperativPlanlaegningDSR.md)
* [ProcedureTypeDCCG1](ValueSet-ProcedureTypeDCCG1.md)
* [ProcedureTypeDCCG2](ValueSet-ProcedureTypeDCCG2.md)
* [ProcedureTypeDCCG3](ValueSet-ProcedureTypeDCCG3.md)
* [ProcedureUdfoertDCCG](ValueSet-ProcedureUdfoertDCCG.md)
* [ProcedureUdfoertK1DCCG](ValueSet-ProcedureUdfoertK1DCCG.md)
* [ProcedureUdfoertK2DCCG](ValueSet-ProcedureUdfoertK2DCCG.md)
* [ProcedureUdfoertK3DCCG](ValueSet-ProcedureUdfoertK3DCCG.md)
* [ProcedureUdfoertR1DCCG](ValueSet-ProcedureUdfoertR1DCCG.md)
* [ProcedureUdfoertR2DCCG](ValueSet-ProcedureUdfoertR2DCCG.md)
* [ProcedureUdfoertR3DCCG](ValueSet-ProcedureUdfoertR3DCCG.md)
* [ProcedureUdfoertR4DCCG](ValueSet-ProcedureUdfoertR4DCCG.md)
* [ProcedurerAndreDKRR](ValueSet-ProcedurerAndreDKRR.md)
* [RobotDHDB](ValueSet-RobotDHDB.md)
* [SubscapularisDSR](ValueSet-SubscapularisDSR.md)
* [SupplerendeIndgrebDSR](ValueSet-SupplerendeIndgrebDSR.md)
* [TidligereIndgrebDSR](ValueSet-TidligereIndgrebDSR.md)
* [TidligereOperationDKR](ValueSet-TidligereOperationDKR.md)
* [TransplantationCageAugmentDHR](ValueSet-TransplantationCageAugmentDHR.md)
* [TypeLokalresektionDCCG](ValueSet-TypeLokalresektionDCCG.md)
* [TypeLokalresektionKolonDCCG](ValueSet-TypeLokalresektionKolonDCCG.md)
* [TypeLokalresektionRektumDCCG](ValueSet-TypeLokalresektionRektumDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ProcedureType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
  "version" : "2.15.0",
  "name" : "ProcedureType",
  "title" : "Procedure type: Codes for different durations",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Procedure type: Codes for different durations",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 91,
  "concept" : [
    {
      "code" : "lichtenstein",
      "display" : "Lichtenstein",
      "definition" : "Lichtenstein"
    },
    {
      "code" : "maclichtenstein",
      "display" : "Modified Lichtenstein/MacLichtenstein",
      "definition" : "Modificeret Lichtenstein/MacLichtenstein"
    },
    {
      "code" : "onstep",
      "display" : "Onstep",
      "definition" : "Onstep"
    },
    {
      "code" : "open_mesh",
      "display" : "Open mesh",
      "definition" : "Open mesh / Åbent mesh",
      "concept" : [
        {
          "code" : "plug",
          "display" : "Plug",
          "definition" : "Plug"
        },
        {
          "code" : "plug_plate",
          "display" : "Plug and plate",
          "definition" : "Plug and plate / Plug og plade"
        }
      ]
    },
    {
      "code" : "open",
      "display" : "Open",
      "definition" : "Open / Åbent",
      "concept" : [
        {
          "code" : "anuloraphi",
          "display" : "Anuloraphi",
          "definition" : "Anuloraphi"
        },
        {
          "code" : "mcvay",
          "display" : "McVay",
          "definition" : "McVay"
        },
        {
          "code" : "bassini",
          "display" : "Bassini",
          "definition" : "Bassini"
        },
        {
          "code" : "shouldice",
          "display" : "Shouldice",
          "definition" : "Shouldice"
        }
      ]
    },
    {
      "code" : "laparoscopic",
      "display" : "Laparoscopic",
      "definition" : "Laparoscopic / Laparoskopisk",
      "concept" : [
        {
          "code" : "transperitoneal",
          "display" : "Transperitoneal",
          "definition" : "Transperitoneal"
        },
        {
          "code" : "extraperitoneal",
          "display" : "Extraperitoneal",
          "definition" : "Extraperitoneal"
        },
        {
          "code" : "multiple_ports",
          "display" : "Multiple ports",
          "definition" : "Multiple ports / Flerport"
        }
      ]
    },
    {
      "code" : "laparotomy",
      "display" : "Laparotomy",
      "definition" : "Laparotomy / Laparotomi / SNOMED-CT: 86481000"
    },
    {
      "code" : "converted_open",
      "display" : "Converted to open from laparoscopic",
      "definition" : "Converted to open from laparoscopic / Konverteret til åben fra laparoskopisk"
    },
    {
      "code" : "converted_open_to_lap",
      "display" : "Converted from open to laparoscopic",
      "definition" : "Open converted to laparoscopic / Åben konverteret til laparoskopisk"
    },
    {
      "code" : "combined_open",
      "display" : "Combined open",
      "definition" : "Combined open / Kombineret åben"
    },
    {
      "code" : "robot_assisted",
      "display" : "Robot assisted",
      "definition" : "Robot assisted / Robotassisteret",
      "concept" : [
        {
          "code" : "robot_laparoscopic",
          "display" : "Robot assisted laparoscopic",
          "definition" : "Robot assisted laparoscopic / Robot-assisteret laparoskopisk"
        },
        {
          "code" : "robot_converted_laparoscopic",
          "display" : "Robot assisted laparoscopic converted to laparoscopic",
          "definition" : "Robot assisted laparoscopic converted to laparoscopic / Robot-assisteret laparoskopisk konverteret til laparoskopisk"
        },
        {
          "code" : "robot_converted_open",
          "display" : "Robot assisted laparoscopic converted to open",
          "definition" : "Robot assisted laparoscopic converted to open / Robot-assisteret laparoskopisk konverteret til åben"
        }
      ]
    },
    {
      "code" : "milos",
      "display" : "MILOS",
      "definition" : "MILOS"
    },
    {
      "code" : "emilos",
      "display" : "eMILOS",
      "definition" : "eMILOS"
    },
    {
      "code" : "etep",
      "display" : "eTEP",
      "definition" : "eTEP - Robot-assisteret metode"
    },
    {
      "code" : "tarup",
      "display" : "TARUP",
      "definition" : "TARUP - Robot-assisteret metode"
    },
    {
      "code" : "tapp",
      "display" : "TAPP",
      "definition" : "TAPP - Robot-assisteret metode"
    },
    {
      "code" : "endoscopic",
      "display" : "Endoscopic",
      "definition" : "Endoscopic / Endoskopisk",
      "concept" : [
        {
          "code" : "local_resection",
          "display" : "Local ressection",
          "definition" : "Local ressection / Lokalresektion"
        },
        {
          "code" : "local_resection_tes",
          "display" : "Local ressection (incl. TES)",
          "definition" : "Local ressection followed by TES / Lokalresektion efterfulgt af TES"
        },
        {
          "code" : "local_resection_ex_tes",
          "display" : "Local ressection (excl. TES)",
          "definition" : "Local ressection (excl. TES) / Endoskopisk lokalresektion (ekskl. TES)"
        },
        {
          "code" : "transanal_resection",
          "display" : "Transanal endoskopisk lokalresektion (TES)",
          "definition" : "Transanal endoskopisk lokalresektion (TES)"
        },
        {
          "code" : "full_wall_resection",
          "display" : "Endoskopisk fuldvægsresektion",
          "definition" : "Endoskopisk fuldvægsresektion"
        },
        {
          "code" : "other_endoscopic",
          "display" : "Anden endoskopisk procedure",
          "definition" : "Anden endoskopisk procedure"
        }
      ]
    },
    {
      "code" : "cels",
      "display" : "Kombineret endoskopisk og laparoskopisk procedure (CELS)",
      "definition" : "Kombineret endoskopisk og laparoskopisk procedure (CELS)"
    },
    {
      "code" : "externus_obliquus",
      "display" : "Externus Obliquus",
      "definition" : "Externus Obliquus"
    },
    {
      "code" : "transversus_abdominis",
      "display" : "Transversus Abdominis",
      "definition" : "Transversus Abdominis"
    },
    {
      "code" : "dissection",
      "display" : "Dissection",
      "definition" : "Dissection / Dissektion / SNOMED-CT: 122459003",
      "concept" : [
        {
          "code" : "transanal_dissection",
          "display" : "Transanal dissection",
          "definition" : "Transanal dissektion"
        }
      ]
    },
    {
      "code" : "polypectomy",
      "display" : "Polypektomi",
      "definition" : "Polypektomi"
    },
    {
      "code" : "emr",
      "display" : "EMR inkl. piecemeal EMR",
      "definition" : "EMR inkl. piecemeal EMR"
    },
    {
      "code" : "piecemeal_resection",
      "display" : "Piecemeal resektion",
      "definition" : "Piecemeal resektion"
    },
    {
      "code" : "stent",
      "display" : "Stent",
      "definition" : "Stent / SNOMED-CT: 65818007",
      "concept" : [
        {
          "code" : "stent_rectum",
          "display" : "Stentanlæggelse i rektum",
          "definition" : "Stentanlæggelse i rektum"
        },
        {
          "code" : "stent_colon",
          "display" : "Stentanlæggelse i colon",
          "definition" : "Stentanlæggelse i colon"
        }
      ]
    },
    {
      "code" : "stoma",
      "display" : "Stoma",
      "definition" : "Stoma / Stomi / SNOMED-CT: 245857005"
    },
    {
      "code" : "damage_control",
      "display" : "Damage control",
      "definition" : "Damage control"
    },
    {
      "code" : "tme",
      "display" : "TME",
      "definition" : "TME"
    },
    {
      "code" : "tem",
      "display" : "TEM",
      "definition" : "TEM"
    },
    {
      "code" : "pme",
      "display" : "PME",
      "definition" : "PME"
    },
    {
      "code" : "extensive_excision",
      "display" : "Extensive excision",
      "definition" : "Extensive excision / Ekstensiv excision af peritoneum og  HIPEC"
    },
    {
      "code" : "rfa",
      "display" : "RFA",
      "definition" : "RFA / RFA af hepar"
    },
    {
      "code" : "metasis_resection",
      "display" : "Metastasis resection",
      "definition" : "Metastasis resection / Metastaseresektion"
    },
    {
      "code" : "ape_conventional",
      "display" : "APE, konventionel",
      "definition" : "APE, konventionel"
    },
    {
      "code" : "proctocolectomy_pouch",
      "display" : "Proktokolektomi med ileoanal pouch",
      "definition" : "Proktokolektomi med ileoanal pouch"
    },
    {
      "code" : "stoma_shunt",
      "display" : "Kun aflastende stomi eller intern shunt",
      "definition" : "Kun aflastende stomi eller intern shunt"
    },
    {
      "code" : "exploratory_intervention",
      "display" : "Kun eksplorativt indgreb",
      "definition" : "Kun eksplorativt indgreb"
    },
    {
      "code" : "esd",
      "display" : "ESD inkl. piecemeal ESD",
      "definition" : "ESD inkl. piecemeal ESD"
    },
    {
      "code" : "tamis",
      "display" : "TAMIS",
      "definition" : "TAMIS"
    },
    {
      "code" : "teo",
      "display" : "TEO",
      "definition" : "TEO"
    },
    {
      "code" : "other_transanal",
      "display" : "Anden transanal adgang/teknik",
      "definition" : "Anden transanal adgang/teknik"
    },
    {
      "code" : "transplant",
      "display" : "Transplant",
      "definition" : "Transplant / Transplantation",
      "concept" : [
        {
          "code" : "cage",
          "display" : "Cage",
          "definition" : "Cage"
        },
        {
          "code" : "augments",
          "display" : "Augments",
          "definition" : "Augments"
        }
      ]
    },
    {
      "code" : "luxation",
      "display" : "Luxation",
      "definition" : "Luxation / Luksation"
    },
    {
      "code" : "tractus_tendonesis",
      "display" : "Tractus tendonesis",
      "definition" : "Tractus tendonesis"
    },
    {
      "code" : "internal_brace",
      "display" : "Internal brace",
      "definition" : "Internal brace / Syntetisk forstærkning"
    },
    {
      "code" : "multiple_ligaments_reconstruction",
      "display" : "Multiple ligaments reconstruction",
      "definition" : "Multiple ligaments reconstruction / Flerligament-rekonstruktion (inkl. isoleret PCL, LCL, MCL)"
    },
    {
      "code" : "synovectomy",
      "display" : "Synovectomy",
      "definition" : "Synovectomy / Synovektomi"
    },
    {
      "code" : "implant_removal",
      "display" : "Implant removal",
      "definition" : "Implant removal / Implantatfjernelse"
    },
    {
      "code" : "osteotomy",
      "display" : "Osteotomy",
      "definition" : "Osteotomy / Osteotomi"
    },
    {
      "code" : "osteosynthesis",
      "display" : "Osteosynthesis",
      "definition" : "Osteosynthesis / Osteosyntese"
    },
    {
      "code" : "operation_infection",
      "display" : "Operation because of an infection",
      "definition" : "Operation because of an infection / Operation pga. infektion"
    },
    {
      "code" : "bone_transplantation",
      "display" : "Bone transplantation",
      "definition" : "Bone transplantation / Knogletransplantation"
    },
    {
      "code" : "operational_mobilization",
      "display" : "Operational mobilization",
      "definition" : "Operational mobilization / Operativ mobilisering"
    },
    {
      "code" : "tenodesis",
      "display" : "Tenodesis",
      "definition" : "Tenodesis"
    },
    {
      "code" : "stabilizing",
      "display" : "Stabilizing",
      "definition" : "Stabilizing / Stabiliserende indgreb"
    },
    {
      "code" : "cuff_reconstruction",
      "display" : "Cuff reconstruction",
      "definition" : "Cuff reconstruction / Cuff rekonstruktion"
    },
    {
      "code" : "arthroscopic",
      "display" : "Arthroscopic operation",
      "definition" : "Arthroscopic operation / Artroskopisk operation uden indsættelse af fremmedlegeme"
    },
    {
      "code" : "templating",
      "display" : "Templating",
      "definition" : "Templating"
    },
    {
      "code" : "psi",
      "display" : "PSI (Patient specific instruments)",
      "definition" : "PSI (Patient specific instruments) / PSI (Patientspecifikke instrumenter)"
    },
    {
      "code" : "tenotomy",
      "display" : "Tenotomy",
      "definition" : "Tenotomy / Tenotomi / SNOMED-CT: 78545003"
    },
    {
      "code" : "meniscetomy",
      "display" : "Meniscectomy",
      "definition" : "Meniscectomy / Meniskektomi"
    },
    {
      "code" : "arthroscopy",
      "display" : "Artroskopi",
      "definition" : "Artroskopi"
    },
    {
      "code" : "reconstruction_cruciate_ligaments",
      "display" : "Reconstruction of cruciate ligaments",
      "definition" : "Reconstruction of cruciate ligaments / Korsbåndsrekonstruktion"
    },
    {
      "code" : "proximal_tibial_osteotomy",
      "display" : "Proksimal tibiaosteotomi",
      "definition" : "Proksimal tibiaosteotomi"
    },
    {
      "code" : "osteosynthesis_condyle_fracture",
      "display" : "Osteosyntese af kondylfraktur",
      "definition" : "Osteosyntese af kondylfraktur"
    },
    {
      "code" : "patellectomy",
      "display" : "Patellektomi"
    },
    {
      "code" : "arthrodesis",
      "display" : "Artrodese",
      "definition" : "Artrodese"
    },
    {
      "code" : "tumor_resection",
      "display" : "Tumor resection",
      "definition" : "Resektion af tumorbærende tarmsegment"
    }
  ]
}

```
