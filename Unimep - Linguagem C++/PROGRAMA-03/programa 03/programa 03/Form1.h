#pragma once

namespace programa03 {

	using namespace System;
	using namespace System::ComponentModel;
	using namespace System::Collections;
	using namespace System::Windows::Forms;
	using namespace System::Data;
	using namespace System::Drawing;

	/// <summary>
	/// Summary for Form1
	/// </summary>
	public ref class Form1 : public System::Windows::Forms::Form
	{
	public:
		Form1(void)
		{
			InitializeComponent();
			//
			//TODO: Add the constructor code here
			//
		}

	protected:
		/// <summary>
		/// Clean up any resources being used.
		/// </summary>
		~Form1()
		{
			if (components)
			{
				delete components;
			}
		}
	private: System::Windows::Forms::Label^  label1;
	protected: 
	private: System::Windows::Forms::Label^  label2;
	private: System::Windows::Forms::Label^  label3;
	private: System::Windows::Forms::Label^  label4;
	private: System::Windows::Forms::Label^  label5;
	private: System::Windows::Forms::Label^  label6;
	private: System::Windows::Forms::Label^  label7;
	private: System::Windows::Forms::Label^  label8;
	private: System::Windows::Forms::Label^  label9;
	private: System::Windows::Forms::TextBox^  textBox1;
	private: System::Windows::Forms::TextBox^  textBox2;
	private: System::Windows::Forms::TextBox^  textBox3;
	private: System::Windows::Forms::TextBox^  textBox4;
	private: System::Windows::Forms::ToolTip^  toolTip1;
	private: System::Windows::Forms::TextBox^  textBox5;
	private: System::Windows::Forms::TextBox^  textBox6;
	private: System::Windows::Forms::TextBox^  textBox7;
	private: System::Windows::Forms::Button^  CALCULAR;
	private: System::Windows::Forms::Button^  CONTINUAR;
	private: System::Windows::Forms::Button^  TERMINAR;


	private: System::ComponentModel::IContainer^  components;

	private:
		/// <summary>
		/// Required designer variable.
		/// </summary>


#pragma region Windows Form Designer generated code
		/// <summary>
		/// Required method for Designer support - do not modify
		/// the contents of this method with the code editor.
		/// </summary>
		void InitializeComponent(void)
		{
			this->components = (gcnew System::ComponentModel::Container());
			this->label1 = (gcnew System::Windows::Forms::Label());
			this->label2 = (gcnew System::Windows::Forms::Label());
			this->label3 = (gcnew System::Windows::Forms::Label());
			this->label4 = (gcnew System::Windows::Forms::Label());
			this->label5 = (gcnew System::Windows::Forms::Label());
			this->label6 = (gcnew System::Windows::Forms::Label());
			this->label7 = (gcnew System::Windows::Forms::Label());
			this->label8 = (gcnew System::Windows::Forms::Label());
			this->label9 = (gcnew System::Windows::Forms::Label());
			this->textBox1 = (gcnew System::Windows::Forms::TextBox());
			this->textBox2 = (gcnew System::Windows::Forms::TextBox());
			this->textBox3 = (gcnew System::Windows::Forms::TextBox());
			this->textBox4 = (gcnew System::Windows::Forms::TextBox());
			this->toolTip1 = (gcnew System::Windows::Forms::ToolTip(this->components));
			this->textBox5 = (gcnew System::Windows::Forms::TextBox());
			this->textBox6 = (gcnew System::Windows::Forms::TextBox());
			this->textBox7 = (gcnew System::Windows::Forms::TextBox());
			this->CALCULAR = (gcnew System::Windows::Forms::Button());
			this->CONTINUAR = (gcnew System::Windows::Forms::Button());
			this->TERMINAR = (gcnew System::Windows::Forms::Button());
			this->SuspendLayout();
			// 
			// label1
			// 
			this->label1->AutoSize = true;
			this->label1->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label1->Location = System::Drawing::Point(181, 9);
			this->label1->Name = L"label1";
			this->label1->Size = System::Drawing::Size(238, 27);
			this->label1->TabIndex = 0;
			this->label1->Text = L"UNIMEP - FEAU - SBO";
			// 
			// label2
			// 
			this->label2->AutoSize = true;
			this->label2->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label2->Location = System::Drawing::Point(12, 76);
			this->label2->Name = L"label2";
			this->label2->Size = System::Drawing::Size(554, 27);
			this->label2->TabIndex = 1;
			this->label2->Text = L"PROGRAMA PARA CALCULAR OPERAÇÕES ARITMÉTICAS";
			// 
			// label3
			// 
			this->label3->AutoSize = true;
			this->label3->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label3->Location = System::Drawing::Point(46, 161);
			this->label3->Name = L"label3";
			this->label3->Size = System::Drawing::Size(306, 27);
			this->label3->TabIndex = 2;
			this->label3->Text = L"DIGITE O PRIMEIRO NÚMERO";
			// 
			// label4
			// 
			this->label4->AutoSize = true;
			this->label4->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label4->Location = System::Drawing::Point(46, 188);
			this->label4->Name = L"label4";
			this->label4->Size = System::Drawing::Size(304, 27);
			this->label4->TabIndex = 3;
			this->label4->Text = L"DIGITE O SEGUNDO NÚMERO";
			// 
			// label5
			// 
			this->label5->AutoSize = true;
			this->label5->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label5->Location = System::Drawing::Point(46, 215);
			this->label5->Name = L"label5";
			this->label5->Size = System::Drawing::Size(71, 27);
			this->label5->TabIndex = 4;
			this->label5->Text = L"SOMA";
			// 
			// label6
			// 
			this->label6->AutoSize = true;
			this->label6->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label6->Location = System::Drawing::Point(46, 242);
			this->label6->Name = L"label6";
			this->label6->Size = System::Drawing::Size(131, 27);
			this->label6->TabIndex = 5;
			this->label6->Text = L"SUBTRAÇÃO";
			// 
			// label7
			// 
			this->label7->AutoSize = true;
			this->label7->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label7->Location = System::Drawing::Point(46, 269);
			this->label7->Name = L"label7";
			this->label7->Size = System::Drawing::Size(101, 27);
			this->label7->TabIndex = 6;
			this->label7->Text = L"DIVISÃO";
			// 
			// label8
			// 
			this->label8->AutoSize = true;
			this->label8->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label8->Location = System::Drawing::Point(46, 296);
			this->label8->Name = L"label8";
			this->label8->Size = System::Drawing::Size(173, 27);
			this->label8->TabIndex = 7;
			this->label8->Text = L"MULTIPLICAÇÃO";
			// 
			// label9
			// 
			this->label9->AutoSize = true;
			this->label9->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label9->Location = System::Drawing::Point(46, 323);
			this->label9->Name = L"label9";
			this->label9->Size = System::Drawing::Size(210, 27);
			this->label9->TabIndex = 8;
			this->label9->Text = L"RESTO DA DIVISÃO";
			// 
			// textBox1
			// 
			this->textBox1->Location = System::Drawing::Point(503, 161);
			this->textBox1->Name = L"textBox1";
			this->textBox1->Size = System::Drawing::Size(63, 20);
			this->textBox1->TabIndex = 9;
			// 
			// textBox2
			// 
			this->textBox2->Location = System::Drawing::Point(502, 187);
			this->textBox2->Name = L"textBox2";
			this->textBox2->Size = System::Drawing::Size(64, 20);
			this->textBox2->TabIndex = 10;
			// 
			// textBox3
			// 
			this->textBox3->Location = System::Drawing::Point(501, 213);
			this->textBox3->Name = L"textBox3";
			this->textBox3->Size = System::Drawing::Size(65, 20);
			this->textBox3->TabIndex = 11;
			// 
			// textBox4
			// 
			this->textBox4->Location = System::Drawing::Point(501, 239);
			this->textBox4->Name = L"textBox4";
			this->textBox4->Size = System::Drawing::Size(65, 20);
			this->textBox4->TabIndex = 12;
			// 
			// textBox5
			// 
			this->textBox5->Location = System::Drawing::Point(500, 265);
			this->textBox5->Name = L"textBox5";
			this->textBox5->Size = System::Drawing::Size(66, 20);
			this->textBox5->TabIndex = 13;
			// 
			// textBox6
			// 
			this->textBox6->Location = System::Drawing::Point(499, 296);
			this->textBox6->Name = L"textBox6";
			this->textBox6->Size = System::Drawing::Size(67, 20);
			this->textBox6->TabIndex = 14;
			// 
			// textBox7
			// 
			this->textBox7->Location = System::Drawing::Point(498, 322);
			this->textBox7->Name = L"textBox7";
			this->textBox7->Size = System::Drawing::Size(68, 20);
			this->textBox7->TabIndex = 15;
			// 
			// CALCULAR
			// 
			this->CALCULAR->BackColor = System::Drawing::SystemColors::HotTrack;
			this->CALCULAR->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->CALCULAR->Location = System::Drawing::Point(51, 434);
			this->CALCULAR->Name = L"CALCULAR";
			this->CALCULAR->Size = System::Drawing::Size(130, 40);
			this->CALCULAR->TabIndex = 16;
			this->CALCULAR->Text = L"CALCULAR";
			this->CALCULAR->UseVisualStyleBackColor = false;
			// 
			// CONTINUAR
			// 
			this->CONTINUAR->BackColor = System::Drawing::SystemColors::HotTrack;
			this->CONTINUAR->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->CONTINUAR->Location = System::Drawing::Point(227, 434);
			this->CONTINUAR->Name = L"CONTINUAR";
			this->CONTINUAR->Size = System::Drawing::Size(150, 40);
			this->CONTINUAR->TabIndex = 17;
			this->CONTINUAR->Text = L"CONTINUAR";
			this->CONTINUAR->UseVisualStyleBackColor = false;
			// 
			// TERMINAR
			// 
			this->TERMINAR->BackColor = System::Drawing::SystemColors::HotTrack;
			this->TERMINAR->Font = (gcnew System::Drawing::Font(L"Comic Sans MS", 14.25F, System::Drawing::FontStyle::Bold, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->TERMINAR->Location = System::Drawing::Point(416, 434);
			this->TERMINAR->Name = L"TERMINAR";
			this->TERMINAR->Size = System::Drawing::Size(150, 40);
			this->TERMINAR->TabIndex = 18;
			this->TERMINAR->Text = L"TERMINAR";
			this->TERMINAR->UseVisualStyleBackColor = false;
			// 
			// Form1
			// 
			this->AutoScaleDimensions = System::Drawing::SizeF(6, 13);
			this->AutoScaleMode = System::Windows::Forms::AutoScaleMode::Font;
			this->BackColor = System::Drawing::Color::Yellow;
			this->ClientSize = System::Drawing::Size(584, 492);
			this->Controls->Add(this->TERMINAR);
			this->Controls->Add(this->CONTINUAR);
			this->Controls->Add(this->CALCULAR);
			this->Controls->Add(this->textBox7);
			this->Controls->Add(this->textBox6);
			this->Controls->Add(this->textBox5);
			this->Controls->Add(this->textBox4);
			this->Controls->Add(this->textBox3);
			this->Controls->Add(this->textBox2);
			this->Controls->Add(this->textBox1);
			this->Controls->Add(this->label9);
			this->Controls->Add(this->label8);
			this->Controls->Add(this->label7);
			this->Controls->Add(this->label6);
			this->Controls->Add(this->label5);
			this->Controls->Add(this->label4);
			this->Controls->Add(this->label3);
			this->Controls->Add(this->label2);
			this->Controls->Add(this->label1);
			this->Name = L"Form1";
			this->Text = L"Form1";
			this->Load += gcnew System::EventHandler(this, &Form1::Form1_Load);
			this->ResumeLayout(false);
			this->PerformLayout();

		}
#pragma endregion
	private: System::Void Form1_Load(System::Object^  sender, System::EventArgs^  e)
			 {
				int NRO1, NRO2, SOMA, SUBTRAÇÃO, DIVISÃO, MULTIPLICAÇÃO, RESTO_DA_DIVISÃO;
				NRO1=Convert::ToDouble(this->textBox1->Text);
				NRO2=Convert::ToDouble(this->textBox2->Text);
				SOMA=NRO1 + NRO2;
				SUBTRAÇÃO=NRO1 - NRO2;
				DIVISÃO=NRO1 / NRO2;
				MULTIPLICAÇÃO=NRO1 * NRO2;
				RESTO_DA_DIVISÃO=NRO1 % NRO2;
				this->textBox3->Text=(SOMA).ToString();
				this->textBox4->Text=(SUBTRAÇÃO).ToString();
				this->textBox5->Text=(DIVISÃO).ToString();
				this->textBox6->Text=(MULTIPLICAÇÃO).ToString();
				this->textBox7->Text=(RESTO_DA_DIVISÃO).ToString();
			 }
};
}

